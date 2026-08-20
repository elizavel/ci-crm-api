<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// landing page
$routes->get('/', 'UserAccount::login');
$routes->get('/signup', 'UserAccount::signup'); 
$routes->get('/logout', 'UserAccount::logout');
$routes->get('/dashboard', 'Home::dashboard');

