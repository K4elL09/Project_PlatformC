<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/parkiran', 'ParkiranController::index');
$routes->post('/parkiran/simpan', 'ParkiranController::simpan');
$routes->get('/parkiran/hapus/(:segment)', 'ParkiranController::hapus/$1');

$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('login', 'Auth::login');
$routes->post('auth/doLogin', 'Auth::doLogin');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('keranjang/tambah/(:num)', 'Keranjang::tambah/$1', ['filter' => 'auth']);
$routes->get('keranjang/lihat', 'Keranjang::lihat', ['filter' => 'auth']);
$routes->get('/checkout', 'Keranjang::checkout', ['filter' => 'auth']);
$routes->post('/keranjang/prosesPesanan', 'Keranjang::prosesPesanan', ['filter' => 'auth']);
$routes->get('transaksi', 'Transaksi::index', ['filter' => 'auth']);
