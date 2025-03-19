<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello/(:any)', 'Home::hello/$1');
$routes->get('kategori', 'Home::kategori');
