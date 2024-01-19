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
$routes->get('users', 'ViewUsersPage::index');
$routes->get('users/new/', 'ViewUsersPage::new');
$routes->post('users/new/', 'ViewUsersPage::create');

$routes->get('students', 'ViewStudentsPage::index');
$routes->get('students/new/', 'ViewStudentsPage::new');
$routes->post('students/new/', 'ViewStudentsPage::create');

$routes->get('guardians', 'ViewGuardiansPage::index');
$routes->get('guardians/new/', 'ViewGuardiansPage::new');
$routes->post('guardians/new/', 'ViewGuardiansPage::create');

// File: app/Config/Routes.php
$routes->get('contact', 'ContactPage::index');

