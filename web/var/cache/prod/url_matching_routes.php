<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'redirect', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/voisins_connecte/accueil' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BlogController::homepage'], null, null, null, false, false, null]],
        '/voisins_connecte' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\BlogController::connexion'], null, null, null, true, false, null]],
        '/voisins_connecte/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\BlogController::deconnexion'], null, null, null, false, false, null]],
        '/voisins_connecte/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\BlogController::inscription'], null, null, null, false, false, null]],
        '/voisins_connecte/mon_profil_gestionnaire' => [[['_route' => 'mon_profil_gestionnaire', '_controller' => 'App\\Controller\\BlogController::mon_profil_gestionnaire'], null, null, null, false, false, null]],
        '/voisins_connecte/gestion_publication' => [[['_route' => 'gestion_publication', '_controller' => 'App\\Controller\\BlogController::gestion_publication'], null, null, null, false, false, null]],
        '/voisins_connecte/mon_profil_client/mes_annonces/ajouter' => [[['_route' => 'ajouter_annonce', '_controller' => 'App\\Controller\\BlogController::ajouter_annonce'], null, null, null, false, false, null]],
        '/voisins_connecte/mes_prestations' => [[['_route' => 'mes_prestations', '_controller' => 'App\\Controller\\BlogController::mes_prestations'], null, null, null, false, false, null]],
        '/voisins_connecte/demande_adhesion' => [[['_route' => 'demande_adhesion', '_controller' => 'App\\Controller\\BlogController::demande_adhesion'], null, null, null, false, false, null]],
        '/voisins_connecte/gestion_forfait' => [[['_route' => 'gestion_forfait', '_controller' => 'App\\Controller\\BlogController::gestion_forfait'], null, null, null, false, false, null]],
        '/voisins_connecte/demande_publication' => [[['_route' => 'demande_publication', '_controller' => 'App\\Controller\\BlogController::demande_publication'], null, null, null, false, false, null]],
        '/voisins_connecte/forfaits' => [[['_route' => 'app_forfaits', '_controller' => 'App\\Controller\\ForfaitController::index'], null, null, null, false, false, null]],
        '/voisins_connecte/forfaits/ajouter' => [[['_route' => 'app_forfait_ajouter', '_controller' => 'App\\Controller\\ForfaitController::ajouter'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/voisins_connecte/(?'
                    .'|gestion_publication/(?'
                        .'|modifier/([^/]++)(*:68)'
                        .'|supprimer/([^/]++)(*:93)'
                    .')'
                    .'|demande_(?'
                        .'|adhesion/(?'
                            .'|valider/([^/]++)(*:140)'
                            .'|refuser/([^/]++)(*:164)'
                        .')'
                        .'|publication/(?'
                            .'|valider/([^/]++)(*:204)'
                            .'|refuser/([^/]++)(*:228)'
                        .')'
                    .')'
                    .'|forfaits/(?'
                        .'|modifier/([^/]++)(*:267)'
                        .'|supprimer/([^/]++)(*:293)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        68 => [[['_route' => 'publication_modifier', '_controller' => 'App\\Controller\\BlogController::publication_modifier'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'publication_supprimer', '_controller' => 'App\\Controller\\BlogController::publication_supprimer'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'adhesion_valider', '_controller' => 'App\\Controller\\BlogController::adhesion_valider'], ['id'], null, null, false, true, null]],
        164 => [[['_route' => 'adhesion_refuser', '_controller' => 'App\\Controller\\BlogController::adhesion_refuser'], ['id'], null, null, false, true, null]],
        204 => [[['_route' => 'publication_valider', '_controller' => 'App\\Controller\\BlogController::publication_valider'], ['id'], null, null, false, true, null]],
        228 => [[['_route' => 'publication_refuser', '_controller' => 'App\\Controller\\BlogController::publication_refuser'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'app_forfait_modifier', '_controller' => 'App\\Controller\\ForfaitController::modifier'], ['id'], null, null, false, true, null]],
        293 => [
            [['_route' => 'app_forfait_supprimer', '_controller' => 'App\\Controller\\ForfaitController::supprimer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
