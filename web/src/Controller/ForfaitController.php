<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ForfaitController extends AbstractController
{
    private string $apiUrl = 'http://localhost/voisinconnect_api/api';

    // ════════════════════════════════════════════
    //  UTILITAIRES : appels API
    // ════════════════════════════════════════════

    private function apiGet(string $endpoint, ?int $id = null): array
    {
        $url = $this->apiUrl . '/' . $endpoint;
        if ($id !== null) $url .= '?id=' . $id;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiPost(string $endpoint, array $data): array
    {
        $ch = curl_init($this->apiUrl . '/' . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiPut(string $endpoint, array $data): array
    {
        $ch = curl_init($this->apiUrl . '/' . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiDelete(string $endpoint, int|string $id): array
    {
        $ch = curl_init($this->apiUrl . '/' . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['id' => $id]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    // Liste fixe des fonctionnalités (ordre d'affichage dans le tableau)
    public static function getFonctionnalites(): array
    {
        return [
            'parametrage'               => ['label' => 'Paramétrage', 'categorie' => 'Proposer des services'],
            'perimetreIntervention'     => ['label' => "Périmètre d'intervention", 'categorie' => 'Proposer des services'],
            'notifications'             => ['label' => 'Notifications « Nouvelles demandes »', 'categorie' => 'Proposer des services'],
            'locationMateriel'          => ['label' => 'Location de matériel', 'categorie' => 'Répondre aux demandes'],
            'prestationService'         => ['label' => 'Prestation de service', 'categorie' => 'Répondre aux demandes'],
            'numeroProfil'              => ['label' => 'Numéro de téléphone sur le profil', 'categorie' => 'Profil utilisateur'],
            'photosProfil'              => ['label' => 'Photos des réalisations sur le profil', 'categorie' => 'Profil utilisateur'],
            'accompagnementPrioritaire' => ['label' => 'Accompagnement personnalisé et prioritaire', 'categorie' => 'Assistance'],
        ];
    }

    // ════════════════════════════════════════════
    //  FORFAITS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/forfaits', name: 'app_forfaits')]
    public function index(): Response
    {
        $forfaits = $this->apiGet('forfaits.php');

        return $this->render('forfaits.html.twig', [
            'forfaits' => $forfaits,
            'fonctionnalites' => self::getFonctionnalites(),
        ]);
    }

    #[Route('/voisins_connecte/forfaits/ajouter', name: 'app_forfait_ajouter')]
    public function ajouter(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            $data['duree'] = match($data['duree']) {
                'mois'    => 30,
                'an'      => 365,
                'gratuit' => 0,
                default   => 0,
            };

            $fonctions = [
                'fonc_parametrage', 'fonc_perimetreIntervention', 'fonc_notifications',
                'fonc_locationMateriel', 'fonc_prestationService', 'fonc_numeroProfil',
                'fonc_photosProfil', 'fonc_accompagnementPrioritaire'
            ];

            foreach ($fonctions as $fonc) {
                if (!isset($data[$fonc])) $data[$fonc] = '0';
            }

            $this->apiPost('forfaits.php', $data);
            $this->addFlash('success', 'Forfait créé avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }

        return $this->render('ajouter_forfait.html.twig', [
            'fonctionnalites' => self::getFonctionnalites(),
        ]);
    }

    #[Route('/voisins_connecte/forfaits/modifier/{id}', name: 'app_forfait_modifier')]
    public function modifier(int $id, Request $request): Response
    {
        $forfait = $this->apiGet('forfaits.php', $id);

        if (empty($forfait)) {
            throw $this->createNotFoundException('Forfait introuvable.');
        }

        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $data['idForfait'] = $id;

            $data['duree'] = match($data['duree']) {
                'mois'    => 30,
                'an'      => 365,
                'gratuit' => 0,
                default   => 0,
            };

            $fonctions = [
                'fonc_parametrage', 'fonc_perimetreIntervention', 'fonc_notifications',
                'fonc_locationMateriel', 'fonc_prestationService', 'fonc_numeroProfil',
                'fonc_photosProfil', 'fonc_accompagnementPrioritaire'
            ];

            foreach ($fonctions as $fonc) {
                if (!isset($data[$fonc])) $data[$fonc] = '0';
            }

            $this->apiPut('forfaits.php', $data);
            $this->addFlash('success', 'Forfait modifié avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }

        return $this->render('modif_forfait.html.twig', [
            'forfait' => $forfait,
            'id' => $id,
            'fonctionnalites' => self::getFonctionnalites(),
        ]);
    }

    #[Route('/voisins_connecte/forfaits/supprimer/{id}', name: 'app_forfait_supprimer')]
    public function supprimer(int $id): Response
    {
        $this->apiDelete('forfaits.php', $id);
        $this->addFlash('success', 'Forfait supprimé.');
        return $this->redirectToRoute('app_forfaits');
    }
}