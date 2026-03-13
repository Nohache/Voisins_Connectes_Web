<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class ForfaitController extends AbstractController
{
    // Liste fixe des fonctionnalités (ordre d'affichage dans le tableau)
    public static function getFonctionnalites(): array
    {
        return [
            'parametrage'               => ['label' => 'Paramétrage',                              'categorie' => 'Proposer des services'],
            'perimetreIntervention'     => ['label' => "Périmètre d'intervention",                 'categorie' => 'Proposer des services'],
            'notifications'             => ['label' => 'Notifications « Nouvelles demandes »',     'categorie' => 'Proposer des services'],
            'locationMateriel'          => ['label' => 'Location de matériel',                     'categorie' => 'Répondre aux demandes'],
            'prestationService'         => ['label' => 'Prestation de service',                    'categorie' => 'Répondre aux demandes'],
            'numeroProfil'              => ['label' => 'Numéro de téléphone sur le profil',        'categorie' => 'Profil utilisateur'],
            'photosProfil'              => ['label' => 'Photos des réalisations sur le profil',    'categorie' => 'Profil utilisateur'],
            'accompagnementPrioritaire' => ['label' => 'Accompagnement personnalisé et prioritaire', 'categorie' => 'Assistance'],
        ];
    }

    // Données en dur — remplacer par Doctrine quand la BDD sera branchée
    private function getForfaits(): array
    {
        return [
            'standard' => [
                'id'          => 'standard',
                'nomForfait'  => 'Standard',
                'prix'        => '0',
                'duree'       => 'gratuit',
                'description' => json_encode(['parametrage', 'perimetreIntervention', 'notifications', 'locationMateriel', 'prestationService']),
            ],
            'premium' => [
                'id'          => 'premium',
                'nomForfait'  => 'Premium',
                'prix'        => '9.90',
                'duree'       => 'mois',
                'description' => json_encode(['parametrage', 'perimetreIntervention', 'notifications', 'locationMateriel', 'prestationService', 'numeroProfil', 'photosProfil', 'accompagnementPrioritaire']),
            ],
        ];
    }

    #[Route('/voisins_connecte/forfaits', name: 'app_forfaits')]
    public function index(SessionInterface $session): Response
    {
        $forfaits = $session->get('forfaits', $this->getForfaits());

        // Décoder les fonctionnalités actives de chaque forfait
        foreach ($forfaits as &$f) {
            $f['fonctionnalites'] = json_decode($f['description'] ?? '[]', true);
        }

        return $this->render('forfaits.html.twig', [
            'forfaits'         => $forfaits,
            'fonctionnalites'  => self::getFonctionnalites(),
        ]);
    }

    #[Route('/voisins_connecte/forfaits/modifier/{id}', name: 'app_forfait_modifier')]
    public function modifier(string $id, Request $request, SessionInterface $session): Response
    {
        $forfaits = $session->get('forfaits', $this->getForfaits());

        if (!isset($forfaits[$id])) {
            throw $this->createNotFoundException('Forfait introuvable.');
        }

        $forfait = $forfaits[$id];
        $forfait['fonctionnalites'] = json_decode($forfait['description'] ?? '[]', true);

        if ($request->isMethod('POST')) {
            $actives = array_keys(array_filter(
                $request->request->all(),
                fn($v, $k) => str_starts_with($k, 'fonc_'),
                ARRAY_FILTER_USE_BOTH
            ));
            $actives = array_map(fn($k) => substr($k, 5), $actives); // retire "fonc_"

            $forfaits[$id] = [
                'id'          => $id,
                'nomForfait'  => $request->request->get('nomForfait', $forfait['nomForfait']),
                'prix'        => $request->request->get('prix', $forfait['prix']),
                'duree'       => $request->request->get('duree', $forfait['duree']),
                'description' => json_encode($actives),
            ];

            $session->set('forfaits', $forfaits);
            $this->addFlash('success', 'Forfait modifié avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }

        return $this->render('modif_forfait.html.twig', [
            'forfait'        => $forfait,
            'fonctionnalites'=> self::getFonctionnalites(),
        ]);
    }

    #[Route('/voisins_connecte/forfaits/supprimer/{id}', name: 'app_forfait_supprimer')]
    public function supprimer(string $id, SessionInterface $session): Response
    {
        $forfaits = $session->get('forfaits', $this->getForfaits());
        unset($forfaits[$id]);
        $session->set('forfaits', $forfaits);
        $this->addFlash('success', 'Forfait supprimé.');
        return $this->redirectToRoute('app_forfaits');
    }
}
