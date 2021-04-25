<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/acceuilclient' => [[['_route' => 'acceuilclient', '_controller' => 'App\\Controller\\AcceuilclientController::index'], null, null, null, false, false, null]],
        '/affichagecoachclient' => [[['_route' => 'affichagecoachclient', '_controller' => 'App\\Controller\\AffichagecoachclientController::index'], null, null, null, true, false, null]],
        '/ajoutclient' => [[['_route' => 'ajoutclient', '_controller' => 'App\\Controller\\AjoutclientController::ajoutclient'], null, null, null, false, false, null]],
        '/ajoutcoach' => [[['_route' => 'ajoutcoach', '_controller' => 'App\\Controller\\AjoutcoachController::ajoutcoach'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/publication' => [[['_route' => 'publication_index', '_controller' => 'App\\Controller\\PublicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/publication/pub' => [[['_route' => 'publication_index2', '_controller' => 'App\\Controller\\PublicationController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/publication/new' => [[['_route' => 'publication_new', '_controller' => 'App\\Controller\\PublicationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\ReclamationController::index2'], null, null, null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/s/searchrec' => [[['_route' => 'searchrec', '_controller' => 'App\\Controller\\ReclamationController::searchrecbyname'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SignupController::index'], null, null, null, true, false, null]],
        '/updatecurrentuserdata' => [[['_route' => 'updatecurrentuserdata', '_controller' => 'App\\Controller\\UpdatecurrentuserdataController::index'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/affichagecoachclient/(?'
                    .'|delete/([^/]++)(*:209)'
                    .'|updatecoach/([^/]++)(*:237)'
                    .'|b(?'
                        .'|loque/([^/]++)(*:263)'
                        .'|an/([^/]++)(*:282)'
                    .')'
                .')'
                .'|/commentaire/(?'
                    .'|([^/]++)(?'
                        .'|(*:319)'
                        .'|/edit(*:332)'
                        .'|(*:340)'
                    .')'
                    .'|com/([^/]++)(*:361)'
                .')'
                .'|/publication/(?'
                    .'|([^/]++)(*:394)'
                    .'|pub/([^/]++)(*:414)'
                    .'|([^/]++)(?'
                        .'|/edit(*:438)'
                        .'|(*:446)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:483)'
                        .'|/edit(*:496)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:538)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        209 => [[['_route' => 'affichagecoachclientdelete', '_controller' => 'App\\Controller\\AffichagecoachclientController::remove'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'affichagecoachclientupdatecoach', '_controller' => 'App\\Controller\\AffichagecoachclientController::updatecoach'], ['id'], null, null, false, true, null]],
        263 => [[['_route' => 'affichagecoachclientbloque', '_controller' => 'App\\Controller\\AffichagecoachclientController::bloque'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'affichagecoachclientban', '_controller' => 'App\\Controller\\AffichagecoachclientController::ban'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idComment'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idComment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        340 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idComment'], ['DELETE' => 0], null, false, true, null]],
        361 => [[['_route' => 'commentaire_delete2', '_controller' => 'App\\Controller\\CommentaireController::delete2'], ['idComment'], ['DELETE' => 0], null, false, true, null]],
        394 => [[['_route' => 'publication_show', '_controller' => 'App\\Controller\\PublicationController::show'], ['idPub'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'publication_front', '_controller' => 'App\\Controller\\PublicationController::show2'], ['idPub'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        438 => [[['_route' => 'publication_edit', '_controller' => 'App\\Controller\\PublicationController::edit'], ['idPub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [[['_route' => 'publication_delete', '_controller' => 'App\\Controller\\PublicationController::delete'], ['idPub'], ['DELETE' => 0], null, false, true, null]],
        483 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        496 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
