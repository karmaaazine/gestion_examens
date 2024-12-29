<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Home::index');  

$routes->get('/registe', 'Home::register');   
$routes->post('/register', 'RegisterController::store'); 

$routes->get('/login', 'Home::login');  



