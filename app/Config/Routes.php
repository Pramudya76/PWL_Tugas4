<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello/(:any)', 'Home::hello/$1');
$routes->get('kategori', 'Home::kategori');
$routes->get('alatTulis', 'Home::alatTulis');
$routes->get('pakaian', 'Home::pakaian');
$routes->get('snack', 'Home::snack');
$routes->get('/produk', 'Home::produk');
$routes->get('/keranjang', 'Home::keranjang');
