<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'redirect', '_controller' => 'App\\Controller\\BlogController::redirectHome'], null, null, null, false, false, null]],
        '/voisins_connecte' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\BlogController::connexion'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/voisins_connecte/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\BlogController::deconnexion'], null, null, null, false, false, null]],
        '/voisins_connecte/accueil' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BlogController::homepage'], null, null, null, false, false, null]],
        '/voisins_connecte/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\BlogController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voisins_connecte/gestion_forfait' => [[['_route' => 'gestion_forfait', '_controller' => 'App\\Controller\\BlogController::gestion_forfait'], null, null, null, false, false, null]],
        '/voisins_connecte/gestion_publication' => [[['_route' => 'gestion_publication', '_controller' => 'App\\Controller\\BlogController::gestion_publication'], null, null, null, false, false, null]],
        '/voisins_connecte/mes_prestations' => [[['_route' => 'mes_prestations', '_controller' => 'App\\Controller\\BlogController::mes_prestations'], null, null, null, false, false, null]],
        '/voisins_connecte/mon_profil_client/mes_annonces/ajouter' => [[['_route' => 'ajouter_annonce', '_controller' => 'App\\Controller\\BlogController::ajouter_annonce'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voisins_connecte/demande_adhesion' => [[['_route' => 'demande_adhesion', '_controller' => 'App\\Controller\\BlogController::demande_adhesion'], null, null, null, false, false, null]],
        '/voisins_connecte/demande_publication' => [[['_route' => 'demande_publication', '_controller' => 'App\\Controller\\BlogController::demande_publication'], null, null, null, false, false, null]],
        '/voisins_connecte/forfaits' => [[['_route' => 'app_forfaits', '_controller' => 'App\\Controller\\ForfaitController::index'], null, null, null, false, false, null]],
        '/voisins_connecte/forfaits/ajouter' => [[['_route' => 'app_forfait_ajouter', '_controller' => 'App\\Controller\\ForfaitController::ajouter'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/voisins_connecte/(?'
                    .'|gestion_publication/(?'
                        .'|modifier/([^/]++)(*:263)'
                        .'|supprimer/([^/]++)(*:289)'
                    .')'
                    .'|demande_(?'
                        .'|adhesion/(?'
                            .'|valider/([^/]++)(*:337)'
                            .'|refuser/([^/]++)(*:361)'
                        .')'
                        .'|publication/(?'
                            .'|valider/([^/]++)(*:401)'
                            .'|refuser/([^/]++)(*:425)'
                        .')'
                    .')'
                    .'|forfaits/(?'
                        .'|modifier/([^/]++)(*:464)'
                        .'|supprimer/([^/]++)(*:490)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        263 => [[['_route' => 'publication_modifier', '_controller' => 'App\\Controller\\BlogController::publication_modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'publication_supprimer', '_controller' => 'App\\Controller\\BlogController::publication_supprimer'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'adhesion_valider', '_controller' => 'App\\Controller\\BlogController::adhesion_valider'], ['id'], null, null, false, true, null]],
        361 => [[['_route' => 'adhesion_refuser', '_controller' => 'App\\Controller\\BlogController::adhesion_refuser'], ['id'], null, null, false, true, null]],
        401 => [[['_route' => 'publication_valider', '_controller' => 'App\\Controller\\BlogController::publication_valider'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'publication_refuser', '_controller' => 'App\\Controller\\BlogController::publication_refuser'], ['id'], null, null, false, true, null]],
        464 => [[['_route' => 'app_forfait_modifier', '_controller' => 'App\\Controller\\ForfaitController::modifier'], ['id'], null, null, false, true, null]],
        490 => [
            [['_route' => 'app_forfait_supprimer', '_controller' => 'App\\Controller\\ForfaitController::supprimer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
