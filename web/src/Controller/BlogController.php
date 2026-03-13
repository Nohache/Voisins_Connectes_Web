<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/voisins_connecte/accueil', name: 'index')]
    public function homepage()
    {
        return $this->render('accueil.html.twig');
    }

    #[Route('/voisins_connecte/', name: 'connexion')]
    public function connexion()
    {
        return $this->render('connexion.html.twig');
    }  

    #[Route('/voisins_connecte/inscription', name: 'inscription')]
    public function inscription()
    {
        return $this->render('inscription.html.twig');
    }


    #[Route('/voisins_connecte/gestion_publication', name: 'gestion_publication')]
    public function gestion_publication()
    {
        return $this->render('gestion_publication.html.twig');
    }


    #[Route('/voisins_connecte/mon_profil_client/mes_annonces/ajouter', name: 'ajouter_annonce')]
    public function ajouter_annonce()
    {
        return $this->render('ajouter_annonce.html.twig');
    }



    #[Route('/voisins_connecte/modifier_forfait/{id}', name: 'modifier_forfait')]
    public function modifier_forfait($id)
    {
        // Logique pour récupérer les détails du forfait à modifier
        // $forfait = ... (récupérer le forfait depuis la base de données)

        return $this->render('modifier_forfait.html.twig', [
            'forfait_id' => $id,
            // 'forfait' => $forfait, // Passer les détails du forfait à la vue
        ]);
    }

    #[Route('/voisins_connecte/mes_prestations', name: 'mes_prestations')]
    public function mes_prestations()
    {
        return $this->render('mes_prestations.html.twig');
    }
    #[Route('/voisins_connecte/mon_profil_gestionnaire', name: 'mon_profil_gestionnaire')]
    public function mon_profil_gestionnaire()
    {
        return $this->render('mon_profil_gestionnaire.html.twig');
    }
}