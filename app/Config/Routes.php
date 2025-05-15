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
$routes->get('/emprunt', 'Emprunt::index');
$routes->get('/adminabonnes', 'AdminAbonnes::index');
$routes->get('/adminabonneadd', 'AdminAbonneAdd::index');
$routes->post('/adminabonneadd', 'AdminAbonneAdd::create');





