<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// File: app/Config/Routes.php
$routes->get('enroll', 'CreatePage::index');
$routes->post('enroll', 'CreatePage::create');

// File: app/Config/Routes.php
$routes->get('view-users', 'ViewUsersPage::index');

// File: app/Config/Routes.php
$routes->get('contact', 'ContactPage::index');

