<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// 1. Loads Home controller when visiting http://localhost/ITE311-Villar/public/
$routes->get('/', 'Home::index');

// 2. Loads Home controller when visiting http://localhost/ITE311-Villar/public/index.php/home
$routes->get('home', 'Home::index');