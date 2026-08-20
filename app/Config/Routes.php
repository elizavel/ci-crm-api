<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// landing page
$routes->get('/', 'Home::login');
$routes->get('/signup', 'Home::signup'); 
$routes->get('/logout', 'Home::logout');
$routes->get('/dashboard', 'Home::dashboard');

// UserAccount