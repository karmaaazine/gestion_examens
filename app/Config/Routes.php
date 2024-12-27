<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Home::index');
=======

$routes->get('/', 'Home::index');   
$routes->get('/registe', 'Home::register');   
$routes->post('/register', 'RegisterController::store'); 


>>>>>>> 399ad472520c71034827e28f9baf4abab57b0981
