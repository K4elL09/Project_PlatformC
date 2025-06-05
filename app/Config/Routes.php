<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/parkiran', 'ParkiranController::index');
$routes->post('/parkiran/simpan', 'ParkiranController::simpan');
$routes->get('/parkiran/hapus/(:segment)', 'ParkiranController::hapus/$1');