<?php

// Chargement des dépendances PHP
require_once '../vendor/autoload.php';

// Démarrage de session
session_start();

// Chargement des variables d'environnements
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ .'/../');
$dotenv->load();

// Instancier notre routeur afin de rediriger notre utilisateur
$router = new Core\Router();

// Nos routes
// Accueil
$router->add('/ProjectsGithub_MVC-Collection', 'HomeController', 'index');

// Formulaire de contact
$router->add('/ProjectsGithub_MVC-Collection/contact', 'HomeController', 'contact');

// Insertion de données d'essais
$router->add('/ProjectsGithub_MVC-Collection/fixtures', 'FixtureController', 'index');

// Détail d'un projet
$router->add('/projet/details', 'HomeController', 'details');

// Connexion
$router->add('/ProjectsGithub_MVC-Collection/login', 'AuthController', 'login');

// Déconnexion
$router->add('/ProjectsGithub_MVC-Collection/logout', 'AuthController', 'logout');

// Administration - Accueil
$router->add('/ProjectsGithub_MVC-Collection/admin', 'AdminController', 'index');

// Administration - Ajout d'un projet
$router->add('/ProjectsGithub_MVC-Collection/admin/new/project', 'AdminController', 'add');

// Administration - Edition d'un projet
$router->add('/ProjectsGithub_MVC-Collection/admin/edit/project', 'AdminController', 'edit');

// Administration - Suppression d'un projet
$router->add('/ProjectsGithub_MVC-Collection/admin/delete/project', 'AdminController', 'delete');

// Erreur 404
$router->add('/404', 'ErrorController', 'error404');

/**
 * API Routes
 */
// Retourne tous les projets au format JSON
$router->add('/ProjectsGithub_MVC-Collection/api/all/projects', 'ApiController', 'loadAllProjects');

// Retourne les infos d'un projet
$router->add('/ProjectsGithub_MVC-Collection/api/project', 'ApiController', 'loadDetailsProject');

// Moteur de recherche
$router->add('/ProjectsGithub_MVC-Collection/api/search', 'ApiController', 'searchProjects');

// Like un projet
$router->add('/ProjectsGithub_MVC-Collection/api/love', 'ApiController', 'love');

// Dispatch
$router->dispatch($_SERVER['REQUEST_URI']);
