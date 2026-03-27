<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    private string $apiUrl = 'http://localhost/voisinconnect_api/api';

    // ════════════════════════════════════════════
    //  UTILITAIRE : appel API
    // ════════════════════════════════════════════

    private function apiGet(string $endpoint, ?int $id = null): array
    {
        $url = $this->apiUrl . '/' . $endpoint;
        if ($id !== null) {
            $url .= '?id=' . $id;
        }
        $response = file_get_contents($url);
        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiPost(string $endpoint, array $data): array
    {
        $context = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode($data),
            ]
        ]);
        $response = file_get_contents($this->apiUrl . '/' . $endpoint, false, $context);
        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiPut(string $endpoint, array $data): array
    {
        $context = stream_context_create([
            'http' => [
                'method'  => 'PUT',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode($data),
            ]
        ]);
        $response = file_get_contents($this->apiUrl . '/' . $endpoint, false, $context);
        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiDelete(string $endpoint, int|string $id): array
    {
        $context = stream_context_create([
            'http' => [
                'method'  => 'DELETE',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode(['id' => $id]),
            ]
        ]);
        $response = file_get_contents($this->apiUrl . '/' . $endpoint, false, $context);
        return $response ? json_decode($response, true) ?? [] : [];
    }

    // ════════════════════════════════════════════
    //  PAGES GÉNÉRALES
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/accueil', name: 'index')]
    public function homepage(): Response
    {
        return $this->render('accueil.html.twig');
    }

    #[Route('/voisins_connecte/', name: 'connexion')]
    public function connexion(): Response
    {
        return $this->render('connexion.html.twig');
    }

    #[Route('/voisins_connecte/inscription', name: 'inscription')]
    public function inscription(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $this->apiPost('membres.php', $data);
            $this->addFlash('success', 'Gestionnaire créé avec succès !');
            return $this->redirectToRoute('index');
        }
        return $this->render('inscription.html.twig');
    }

    #[Route('/voisins_connecte/deconnexion', name: 'deconnexion')]
    public function deconnexion(): Response
    {
        return $this->redirectToRoute('connexion');
    }

    // ════════════════════════════════════════════
    //  PROFIL
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/mon_profil_gestionnaire', name: 'mon_profil_gestionnaire')]
    public function mon_profil_gestionnaire(): Response
    {
        return $this->render('mon_profil_gestionnaire.html.twig');
    }

    // ════════════════════════════════════════════
    //  PRESTATIONS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/mes_prestations', name: 'mes_prestations')]
    public function mes_prestations(): Response
    {
        $services = $this->apiGet('services.php');
        return $this->render('mes_prestations.html.twig', [
            'services' => $services,
        ]);
    }

    // ════════════════════════════════════════════
    //  ANNONCES
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/mon_profil_client/mes_annonces/ajouter', name: 'ajouter_annonce')]
    public function ajouter_annonce(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $this->apiPost('services.php', $data);
            $this->addFlash('success', 'Annonce ajoutée avec succès !');
            return $this->redirectToRoute('mes_prestations');
        }
        return $this->render('ajouter_annonce.html.twig');
    }

    // ════════════════════════════════════════════
    //  PUBLICATIONS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/gestion_publication', name: 'gestion_publication')]
    public function gestion_publication(): Response
    {
        $publications = $this->apiGet('services.php');
        return $this->render('gestion_publication.html.twig', [
            'publications' => $publications,
        ]);
    }

    #[Route('/voisins_connecte/gestion_publication/modifier/{id}', name: 'publication_modifier')]
    public function publication_modifier(int $id, Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $data['id'] = $id;
            $this->apiPut('services.php', $data);
            $this->addFlash('success', 'Publication modifiée avec succès !');
            return $this->redirectToRoute('gestion_publication');
        }

        $publication = $this->apiGet('services.php', $id);
        return $this->render('modif_publication.html.twig', [
            'publication' => $publication,
            'id'          => $id,
        ]);
    }

    #[Route('/voisins_connecte/gestion_publication/supprimer/{id}', name: 'publication_supprimer')]
    public function publication_supprimer(int $id): Response
    {
        $this->apiDelete('services.php', $id);
        $this->addFlash('success', 'Publication supprimée.');
        return $this->redirectToRoute('gestion_publication');
    }

    // ════════════════════════════════════════════
    //  FORFAITS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/forfaits', name: 'app_forfaits')]
    public function forfaits(): Response
    {
        $forfaits = $this->apiGet('forfaits.php');

        // Tableau des fonctionnalités disponibles (clé => label + catégorie)
        $fonctionnalites = [
            'parametrage'            => ['label' => 'Paramétrage',                          'categorie' => 'Proposer des services'],
            'perimetreIntervention'  => ['label' => "Périmètre d'intervention",             'categorie' => 'Proposer des services'],
            'notifications'          => ['label' => 'Notifications « Nouvelles demandes »', 'categorie' => 'Proposer des services'],
            'location'               => ['label' => 'Location de matériel',                 'categorie' => 'Répondre aux demandes'],
            'prestation'             => ['label' => 'Prestation de service',                'categorie' => 'Répondre aux demandes'],
            'telephone'              => ['label' => 'Numéro de téléphone sur le profil',    'categorie' => 'Profil utilisateur'],
            'photos'                 => ['label' => 'Photos des réalisations sur le profil','categorie' => 'Profil utilisateur'],
            'assistance'             => ['label' => 'Accompagnement personnalisé et prioritaire', 'categorie' => 'Assistance'],
        ];

        return $this->render('forfaits.html.twig', [
            'forfaits'        => $forfaits,
            'fonctionnalites' => $fonctionnalites,
        ]);
    }

    #[Route('/voisins_connecte/gestion_forfait', name: 'gestion_forfait')]
    public function gestion_forfait(): Response
    {
        return $this->redirectToRoute('app_forfaits');
    }

    #[Route('/voisins_connecte/forfaits/ajouter', name: 'app_forfait_ajouter')]
    public function ajouter_forfait(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $this->apiPost('forfaits.php', $data);
            $this->addFlash('success', 'Forfait créé avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }
        return $this->render('ajouter_forfait.html.twig');
    }

    #[Route('/voisins_connecte/forfaits/modifier/{id}', name: 'app_forfait_modifier')]
    public function modifier_forfait(string $id, Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $data['idForfait'] = $id;
            $this->apiPut('forfaits.php', $data);
            $this->addFlash('success', 'Forfait modifié avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }

        $forfait = $this->apiGet('forfaits.php', (int)$id);
        return $this->render('modif_forfait.html.twig', [
            'forfait' => $forfait,
            'id'      => $id,
        ]);
    }

    #[Route('/voisins_connecte/forfaits/supprimer/{id}', name: 'app_forfait_supprimer')]
    public function supprimer_forfait(string $id): Response
    {
        $this->apiDelete('forfaits.php', $id);
        $this->addFlash('success', 'Forfait supprimé.');
        return $this->redirectToRoute('app_forfaits');
    }

    // ════════════════════════════════════════════
    //  ADHÉSIONS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/demande_adhesion', name: 'demande_adhesion')]
    public function demande_adhesion(): Response
    {
        $adhesions = $this->apiGet('adhesions.php');
        return $this->render('demande_adhesion.html.twig', [
            'adhesions' => $adhesions,
        ]);
    }

    // ════════════════════════════════════════════
    //  DEMANDES DE PUBLICATION
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/demande_publication', name: 'demande_publication')]
    public function demande_publication(): Response
    {
        $reponses = $this->apiGet('reponses.php');
        return $this->render('demande_publication.html.twig', [
            'reponses' => $reponses,
        ]);
    }
}
