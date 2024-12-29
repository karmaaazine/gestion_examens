<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');   
$routes->get('/register', 'Home::register');   
$routes->post('/register', 'RegisterController::store'); 
$routes->get('/login', 'LoginController::index');
$routes->post('/login_process', 'LoginController::login_process');
$routes->get('/logout', 'LoginController::logout');
