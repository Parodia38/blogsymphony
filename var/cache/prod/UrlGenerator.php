<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'article_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::index'], [], [['text', '/admin/article/']], [], []],
    'article_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::new'], [], [['text', '/admin/article/ajouter']], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/article']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/categorie/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::new'], [], [['text', '/admin/categorie/ajouter']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/categorie']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/categorie']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/admin/utilisateur/']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/utilisateur']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/utilisateur']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/utilisateur']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], []],
    'site_index' => [[], ['_controller' => 'App\\Controller\\SiteController::index'], [], [['text', '/']], [], []],
    'site_about' => [[], ['_controller' => 'App\\Controller\\SiteController::about'], [], [['text', '/a-propos']], [], []],
    'site_contact' => [[], ['_controller' => 'App\\Controller\\SiteController::contact'], [], [['text', '/contact']], [], []],
    'site_blog' => [[], ['_controller' => 'App\\Controller\\SiteController::blog'], [], [['text', '/blog']], [], []],
    'site_blog_show' => [['slug'], ['_controller' => 'App\\Controller\\SiteController::showArticle'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/blog']], [], []],
    'site_blog_category' => [['slug'], ['_controller' => 'App\\Controller\\SiteController::showCategory'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/blog/categorie']], [], []],
];
