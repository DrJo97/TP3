<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get ('login', 'Login::index');
$routes ->post('login', 'Login::attemptlogin');
$routes ->get ('/admin', 'Admin::dashboard', ['filter' => 'adminauth']);
$routes->get('/abonne', 'Abonne::index');
$routes->get('/abonne/logout', 'Abonne::logout');
$routes->get('/emprunt', 'Emprunt::index');
$routes->get('/adminabonnes', 'AdminAbonnes::index');
$routes->get('/adminabonneadd', 'AdminAbonneAdd::index');
$routes->post('/adminabonneadd', 'AdminAbonneAdd::create');
$routes->get('/adminlivres', 'AdminLivres::index');
$routes->get('/adminlivresadd', 'AdminLivresAdd::index');
$routes->post('/adminlivresadd', 'AdminLivresAdd::create');
$routes->get('/adminexemplaires', 'AdminExemplaires::index');
$routes->get('/adminexemplaireadd', 'AdminExemplaireAdd::index');
$routes->post('/adminexemplaireadd', 'AdminExemplaireAdd::create');
$routes->get('/adminabonneedit/(:num)', 'AdminAbonneEdit::edit/$1');
$routes->post('/adminabonneedit/(:num)', 'AdminAbonneEdit::update/$1');
$routes->get('/adminabonnedelete/(:num)', 'AdminAbonneEdit::delete/$1');
$routes->get('/abonne/livres', 'AbonneLivres::index');
$routes->get('/abonne/exemplaires', 'AbonneExemplaire::index');
$routes->get('/abonne/infos', 'AbonneInfos::index');
$routes->get('/adminemprunt', 'AdminEmprunt::index');
$routes->post('/adminempruntenregistrer', 'AdminEmprunt::enregistrer');
$routes->get('/adminempruntsupprimer', 'AdminEmprunt::supprimer/$1');
$routes->get('/abonne/emprunts', 'AbonneEmprunt::index');
$routes->post('/abonne/emprunts/demander', 'AbonneEmprunt::demander');
$routes->get('/admindemandes', 'AdminDemandes::index');
$routes->get('/admindemandes/valider/(:num)', 'AdminDemandes::valider/$1');
$routes->get('/admindemandes/supprimer/(:num)', 'AdminDemandes::supprimer/$1');


