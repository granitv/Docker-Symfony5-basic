<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\FrontEndController::index'], null, null, null, false, false, null]],
        '/createapp' => [[['_route' => 'createapp', '_controller' => 'App\\Controller\\FrontEndController::createApp'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
            .'|(?:(?:[^./]*+\\.)++)(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:60)'
                    .'|wdt/([^/]++)(*:79)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:124)'
                            .'|router(*:138)'
                            .'|exception(?'
                                .'|(*:158)'
                                .'|\\.css(*:171)'
                            .')'
                        .')'
                        .'|(*:181)'
                    .')'
                .')'
            .')|(?i:127\\.0\\.0\\.1)\\.(?'
                .'|/test(?:/(\\d+))?(*:230)'
            .')|(?:(?:[^./]*+\\.)++)(?'
                .'|/hello(?:/([^/]++))?(*:281)'
            .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        60 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        79 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        124 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        138 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        158 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        171 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        230 => [[['_route' => 'test', 'age' => '0', '_controller' => 'App\\Controller\\FrontEndController::test'], ['age'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        281 => [
            [['_route' => 'hello', 'prenom' => 'World', '_controller' => 'App\\Controller\\FrontEndController::hello'], ['prenom'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
