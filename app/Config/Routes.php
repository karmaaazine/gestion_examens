<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');   
$routes->get('/register', 'RegisterController::index');
$routes->post('/registerStore', 'RegisterController::store'); 
$routes->get('/login', 'LoginController::index');
$routes->post('/login_process', 'LoginController::login');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/logout', 'LoginController::logout');
