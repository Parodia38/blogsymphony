<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/article/ajouter' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\Admin\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorie/ajouter' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'site_index', '_controller' => 'App\\Controller\\SiteController::index'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'site_about', '_controller' => 'App\\Controller\\SiteController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'site_contact', '_controller' => 'App\\Controller\\SiteController::contact'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'site_blog', '_controller' => 'App\\Controller\\SiteController::blog'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|article/([^/]++)(?'
                        .'|(*:36)'
                        .'|/modifier(*:52)'
                        .'|(*:59)'
                    .')'
                    .'|categorie/([^/]++)(?'
                        .'|/modifier(*:97)'
                        .'|(*:104)'
                    .')'
                    .'|utilisateur/([^/]++)(?'
                        .'|(*:136)'
                        .'|/modifier(*:153)'
                        .'|(*:161)'
                    .')'
                .')'
                .'|/blog/(?'
                    .'|([^/]++)(*:188)'
                    .'|categorie/([^/]++)(*:214)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\Admin\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        52 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        59 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        97 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        104 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        136 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        153 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        161 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        188 => [[['_route' => 'site_blog_show', '_controller' => 'App\\Controller\\SiteController::showArticle'], ['slug'], null, null, false, true, null]],
        214 => [
            [['_route' => 'site_blog_category', '_controller' => 'App\\Controller\\SiteController::showCategory'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
