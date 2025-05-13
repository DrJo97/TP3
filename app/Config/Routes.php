<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get ('login', 'Login::index');
$routes ->post('login', 'Login::attemptlogin');
$routes ->get ('/admin', 'Home::index', ['filter' => 'adminauth']);