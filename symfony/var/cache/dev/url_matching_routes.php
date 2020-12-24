<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\FrontEndController::index'], null, null, null, false, false, null]],
        '/createapp' => [[['_route' => 'createapp', '_controller' => 'App\\Controller\\FrontEndController::createApp'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
            .'|(?:(?:[^./]*+\\.)++)(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:57)'
            .')|(?i:127\\.0\\.0\\.1)\\.(?'
                .'|/test(?:/(\\d+))?(*:103)'
            .')|(?:(?:[^./]*+\\.)++)(?'
                .'|/hello(?:/([^/]++))?(*:154)'
            .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        57 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        103 => [[['_route' => 'test', 'age' => '0', '_controller' => 'App\\Controller\\FrontEndController::test'], ['age'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        154 => [
            [['_route' => 'hello', 'prenom' => 'World', '_controller' => 'App\\Controller\\FrontEndController::hello'], ['prenom'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
