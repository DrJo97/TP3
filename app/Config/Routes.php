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