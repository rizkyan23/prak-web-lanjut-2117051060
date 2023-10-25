<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/user/profile/(:any)/(:any)/(:any)', 'UserController::profile');

#form
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user', 'UserController::index');
$routes->get('user/(:any)/edit', 'UserController::edit/$1');
$routes->put('user/(:any)', 'UserController::update/$1');
$routes->delete('/user/(:any)', 'UserController::destroy/$1');
$routes->get('user/(:any)', 'UserController::show/$1');

