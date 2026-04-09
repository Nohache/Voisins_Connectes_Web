<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use PDO;


class BlogController extends AbstractController
{
    private string $apiUrl = 'http://127.0.0.1/voisinconnect_api/api';

    // ════════════════════════════════════════════
    //  UTILITAIRES API
    // ════════════════════════════════════════════

    private function apiGet(string $resource, ?int $id = null): array
    {
        $url = $this->apiUrl . '/' . $resource . '.php';
        if ($id !== null) {
            $url .= '?id=' . $id;
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiPut(string $resource, array $data, int $id): array
    {
        $url = $this->apiUrl . '/' . $resource . '.php?id=' . $id;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiDelete(string $resource, int $id): array
    {
        $url = $this->apiUrl . '/' . $resource . '.php';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['id' => $id]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    private function apiPost(string $resource, array $data): array
    {
        $ch = curl_init($this->apiUrl . '/' . $resource . '.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response ? json_decode($response, true) ?? [] : [];
    }

    
    // ════════════════════════════════════════════
    //  fonctions
    // ════════════════════════════════════════════

    private function requireAdmin(Request $request): ?Response
    {
        $session = $request->getSession();
        $membre = $session->get('membre');

        if (!$membre) {
            $this->addFlash('error', 'Vous devez être connecté.');
            return $this->redirectToRoute('connexion');
        }

        if (($membre['role'] ?? '') !== 'admin') {
            $this->addFlash('error', 'Accès réservé aux administrateurs.');
            return $this->redirectToRoute('connexion');
        }

        return null;
    }

    function login(){
        global $pdo;

        $data = json_decode(file_get_contents("php://input"), true);

        $stmt = $pdo->prepare("SELECT * FROM membre WHERE email=?");
        $stmt->execute([$data['email']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // 🔒 Sécurisation obligatoire
        if(!$user || !isset($user['motDePasse'])){
            echo json_encode(["error" => "User not found"]);
            return;
        }

        if (
            $user['motDePasse'] === $data['motDePasse'] ||
            password_verify($data['motDePasse'], $user['motDePasse'])
        ) {
            $token = base64_encode(json_encode($user));

            echo json_encode([
                "token" => $token,
                "infos_membre" => $user
            ]);
        } else {
            echo json_encode(["error" => "Mot de passe incorrect"]);
        }
    }


    // ════════════════════════════════════════════
    //  ROUTES GÉNÉRALES
    // ════════════════════════════════════════════

    #[Route('/', name: 'redirect')]
    public function redirectHome(): Response
    {
        return $this->redirectToRoute('connexion');
    }

    // ════════════════════════════════════════════
    //  CONNEXION
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/', name: 'connexion', methods: ['GET', 'POST'])]
    public function connexion(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $email      = $request->request->get('email');
            $motDePasse = $request->request->get('motDePasse');

            $membres = $this->apiGet('membres');
            $membre  = null;

            foreach ($membres as $m) {
                if ($m['email'] === $email) {
                    $membre = $m;
                    break;
                }
            }

            if (!$membre) {
                $this->addFlash('error', 'Aucun compte trouvé avec cet email.');
                return $this->redirectToRoute('connexion');
            }

            if ($membre['motDePasse'] !== $motDePasse) {
                $this->addFlash('error', 'Mot de passe incorrect.');
                return $this->redirectToRoute('connexion');
            }

            $session = $request->getSession();
            $session->set('membre', $membre);

            $this->addFlash('success', 'Bienvenue ' . $membre['prenom'] . ' !');
            return $this->redirectToRoute('index');

        }

        return $this->render('connexion.html.twig');
    }

    #[Route('/voisins_connecte/deconnexion', name: 'deconnexion')]
    public function deconnexion(Request $request): Response
    {
        $session = $request->getSession();
        $session->clear(); // supprime toutes les données de session

        $this->addFlash('success', 'Vous êtes déconnecté.');
        return $this->redirectToRoute('connexion');
    }

    #[Route('/voisins_connecte/accueil', name: 'index')]
    public function homepage(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }
        
        $membres   = $this->apiGet('membres');
        $services  = $this->apiGet('services');
        $adhesions = $this->apiGet('adhesions');
        $forfaits  = $this->apiGet('forfaits');

        return $this->render('accueil.html.twig', [
            'nb_membres'                 => count($membres),
            'nb_services'                => count($services),
            'nb_forfaits'                => count($forfaits),
            'nb_adhesions_en_attente'    => count(array_filter($adhesions, fn($a) => ($a['statut'] ?? '') === 'en_attente')),
            'nb_publications_en_attente' => count(array_filter($services, fn($s) => ($s['etatService'] ?? '') === 'en_cours')),
            'dernieres_adhesions'        => array_slice(array_reverse($adhesions), 0, 4),
        ]);
    }

    

    // ════════════════════════════════════════════
    //  INSCRIPTION
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/inscription', name: 'inscription', methods: ['GET', 'POST'])]
    public function inscription(Request $request): Response
    {
        // Vérifier si un admin est connecté
        $session = $request->getSession();
        $membre = $session->get('membre');

        if (!$membre || ($membre['role'] ?? '') !== 'admin') {
            $this->addFlash('error', 'Accès réservé aux administrateurs.');
            return $this->redirectToRoute('connexion');
        }

        // Traitement du formulaire
        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            if ($data['motDePasse'] !== $data['motDePasse_confirm']) {
                $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                return $this->redirectToRoute('inscription');
            }

            unset($data['motDePasse_confirm']);
            $data['dateInscription'] = date('Y-m-d');
            $data['role'] = 'gestionnaire';

            $this->apiPost('membres', $data);
            $this->addFlash('success', 'Compte créé avec succès !');
            return $this->redirectToRoute('connexion');
        }

        return $this->render('inscription.html.twig');
    }


    // ════════════════════════════════════════════
    //  FORFAITS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/gestion_forfait', name: 'gestion_forfait')]
    public function gestion_forfait(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        return $this->redirectToRoute('app_forfaits');
    }

    #[Route('/voisins_connecte/forfaits', name: 'app_forfaits')]
    public function forfaits(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $forfaits = $this->apiGet('forfaits');
        return $this->render('forfaits.html.twig', [
            'forfaits' => $forfaits,
        ]);
    }


    #[Route('/voisins_connecte/forfaits/ajouter', name: 'app_forfait_ajouter', methods: ['GET', 'POST'])]
    public function ajouter_forfait(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $this->apiPost('forfaits', $data);
            $this->addFlash('success', 'Forfait créé avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }
        return $this->render('ajouter_forfait.html.twig');
    }

    #[Route('/voisins_connecte/forfaits/modifier/{id}', name: 'app_forfait_modifier', methods: ['GET', 'POST'])]
    public function modifier_forfait(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }
        $forfait = $this->apiGet('forfaits', $id);

        if (empty($forfait)) {
            throw $this->createNotFoundException('Forfait introuvable.');
        }

        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $data['idForfait'] = $id;
            $this->apiPut('forfaits', $data, $id);
            $this->addFlash('success', 'Forfait modifié avec succès !');
            return $this->redirectToRoute('app_forfaits');
        }

        return $this->render('modifier_forfait.html.twig', [
            'forfait' => $forfait,
        ]);
    }

    #[Route('/voisins_connecte/forfaits/supprimer/{id}', name: 'app_forfait_supprimer')]
    public function supprimer_forfait(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $this->apiDelete('forfaits', $id);
        $this->addFlash('success', 'Forfait supprimé.');
        return $this->redirectToRoute('app_forfaits');
    }


    // ════════════════════════════════════════════
    //  PUBLICATIONS / SERVICES
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/gestion_publication', name: 'gestion_publication')]
    public function gestion_publication(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }
       
        $services   = $this->apiGet('services');
        $membres    = $this->apiGet('membres');
        $categories = $this->apiGet('categories');

        return $this->render('gestion_publication.html.twig', [
            'services'        => $services,
            'membresIndex'    => array_column($membres, null, 'idMembre'),
            'categoriesIndex' => array_column($categories, null, 'idCategorie'),
        ]);
    }

    #[Route('/voisins_connecte/gestion_publication/modifier/{id}', name: 'publication_modifier', methods: ['GET', 'POST'])]
    public function publication_modifier(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }
        $service    = $this->apiGet('services', $id);
        $categories = $this->apiGet('categories');
        $membres    = $this->apiGet('membres');

        if (empty($service)) {
            throw $this->createNotFoundException('Publication introuvable.');
        }

        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $data['idService']          = $id;
            $data['idMembre_demandeur'] = $service['idMembre_demandeur'];
            $this->apiPut('services', $data, $id);
            $this->addFlash('success', 'Publication modifiée avec succès.');
            return $this->redirectToRoute('gestion_publication');
        }

        return $this->render('modif_publication.html.twig', [
            'service'         => $service,
            'id'              => $id,
            'categories'      => $categories,
            'membresIndex'    => array_column($membres, null, 'idMembre'),
            'categoriesIndex' => array_column($categories, null, 'idCategorie'),
        ]);
    }

    #[Route('/voisins_connecte/gestion_publication/supprimer/{id}', name: 'publication_supprimer')]
    public function publication_supprimer(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $this->apiDelete('services', $id);
        $this->addFlash('success', 'Publication supprimée.');
        return $this->redirectToRoute('gestion_publication');
    }

    // ════════════════════════════════════════════
    //  ANNONCES
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/mes_prestations', name: 'mes_prestations')]
    public function mes_prestations(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $services   = $this->apiGet('services');
        $categories = $this->apiGet('categories');
        $membres    = $this->apiGet('membres');

        return $this->render('mes_prestations.html.twig', [
            'services'        => $services,
            'membresIndex'    => array_column($membres, null, 'idMembre'),
            'categoriesIndex' => array_column($categories, null, 'idCategorie'),
        ]);
    }

    #[Route('/voisins_connecte/mon_profil_client/mes_annonces/ajouter', name: 'ajouter_annonce', methods: ['GET', 'POST'])]
    public function ajouter_annonce(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $data['datePublication'] = date('Y-m-d');
            $data['etatService']     = 'en_cours';
            $this->apiPost('services', $data);
            $this->addFlash('success', 'Annonce ajoutée avec succès !');
            return $this->redirectToRoute('mes_prestations');
        }

        $categories = $this->apiGet('categories');
        return $this->render('ajouter_annonce.html.twig', [
            'categories' => $categories,
        ]);
    }

    // ════════════════════════════════════════════
    //  ADHÉSIONS
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/demande_adhesion', name: 'demande_adhesion')]
    public function demande_adhesion(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $adhesions = $this->apiGet('adhesions');
        $membres   = $this->apiGet('membres');
        $forfaits  = $this->apiGet('forfaits');

        return $this->render('demande_adhesion.html.twig', [
            'adhesions'     => $adhesions,
            'membresIndex'  => array_column($membres, null, 'idMembre'),
            'forfaitsIndex' => array_column($forfaits, null, 'idForfait'),
        ]);
    }

    #[Route('/voisins_connecte/demande_adhesion/valider/{id}', name: 'adhesion_valider')]
    public function adhesion_valider(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        // Récupère toute la liste et filtre par id
        $adhesions = $this->apiGet('adhesions');
        $adhesion  = null;
        foreach ($adhesions as $a) {
            if ((int)$a['idAdhesion'] === $id) {
                $adhesion = $a;
                break;
            }
        }

        if (!empty($adhesion)) {
            $adhesion['statut']     = 'active';
            $adhesion['idAdhesion'] = $id;
            $this->apiPut('adhesions', $adhesion, $id);
            $this->addFlash('success', 'Adhésion validée avec succès !');
        } else {
            $this->addFlash('error', 'Adhésion introuvable.');
        }

        return $this->redirectToRoute('demande_adhesion');
    }

    #[Route('/voisins_connecte/demande_adhesion/refuser/{id}', name: 'adhesion_refuser')]
    public function adhesion_refuser(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        // Récupère toute la liste et filtre par id
        $adhesions = $this->apiGet('adhesions');
        $adhesion  = null;
        foreach ($adhesions as $a) {
            if ((int)$a['idAdhesion'] === $id) {
                $adhesion = $a;
                break;
            }
        }

        if (!empty($adhesion)) {
            $adhesion['statut']     = 'refusee';
            $adhesion['idAdhesion'] = $id;
            $this->apiPut('adhesions', $adhesion, $id);
            $this->addFlash('success', 'Adhésion refusée.');
        } else {
            $this->addFlash('error', 'Adhésion introuvable.');
        }

        return $this->redirectToRoute('demande_adhesion');
    }

    // ════════════════════════════════════════════
    //  DEMANDES DE PUBLICATION
    // ════════════════════════════════════════════

    #[Route('/voisins_connecte/demande_publication', name: 'demande_publication')]
    public function demande_publication(Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $services   = $this->apiGet('services');
        $membres    = $this->apiGet('membres');
        $categories = $this->apiGet('categories');

        $enAttente = array_filter($services, fn($s) => ($s['etatService'] ?? '') === 'en_cours');

        return $this->render('demande_publication.html.twig', [
            'services'        => $enAttente,
            'membresIndex'    => array_column($membres, null, 'idMembre'),
            'categoriesIndex' => array_column($categories, null, 'idCategorie'),
        ]);
    }

    #[Route('/voisins_connecte/demande_publication/valider/{id}', name: 'publication_valider')]
    public function publication_valider(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $service = $this->apiGet('services', $id);

        if (!empty($service)) {
            $service['etatService'] = 'publiee';
            $service['idService']   = $id;
            $this->apiPut('services', $service, $id);
            $this->addFlash('success', 'Publication validée.');
        } else {
            $this->addFlash('error', 'Service non trouvé.');
        }

        return $this->redirectToRoute('demande_publication');
    }

    #[Route('/voisins_connecte/demande_publication/refuser/{id}', name: 'publication_refuser')]
    public function publication_refuser(int $id, Request $request): Response
    {
        if ($redirect = $this->requireAdmin($request)) {
            return $redirect;
        }

        $service = $this->apiGet('services', $id);

        if (!empty($service)) {
            $service['etatService'] = 'refusee';
            $service['idService']   = $id;
            $this->apiPut('services', $service, $id);
            $this->addFlash('success', 'Publication refusée.');
        } else {
            $this->addFlash('error', 'Service non trouvé.');
        }

        return $this->redirectToRoute('demande_publication');
    }
}