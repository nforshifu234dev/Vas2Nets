<?php

use App\Controllers\ViewUsersPage;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Enrollment routes
$routes->get('enroll', 'CreatePage::index');
$routes->post('enroll', 'CreatePage::create');

// User routes
$routes->group('users', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'ViewUsersPage::index');
    $routes->get('new', 'ViewUsersPage::new');
    $routes->post('new', 'ViewUsersPage::create');
});

// Student routes
$routes->group('students', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'ViewStudentsPage::index');
    $routes->get('new', 'ViewStudentsPage::new');
    $routes->post('new', 'ViewStudentsPage::create');
});

// Guardian routes
$routes->group('guardians', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'ViewGuardiansPage::index');
    // Uncomment and customize the routes below as needed
    // $routes->get('new', 'ViewGuardiansPage::new');
    // $routes->post('new', 'ViewGuardiansPage::create');
});

// Contact route
$routes->get('contact', 'ContactUsController::index');
$routes->post('contact', 'ContactUsController::sendMessage');

// Authentication routes
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::attemptLogin');
$routes->post('logout', 'AuthController::logout');

// Dashboard Route
$routes->get('dashboard', 'DashboardController::index');

// $messages Route 
$routes->get('messages', 'MessagesController::index', ['filter' => 'auth', 'auth.roles' => ['admin']] );

// Admin Routes
$routes->group('admin', ['filter' => 'auth', 'auth.roles' => ['admin']], function ($routes) {
    // Your admin routes go here
});

// User Routes
$routes->group('users', ['filter' => 'auth', 'auth.roles' => ['user', 'editor']], function ($routes) {
    $routes->get('profile', 'UserController::profile');
    // Add more user-related routes as needed
});

// Student Routes
$routes->group('students', ['filter' => 'auth', 'auth.roles' => ['student', 'editor']], function ($routes) {
    $routes->get('profile', 'StudentController::profile');
    // Add more student-related routes as needed
});

// Guardians Route
$routes->group('guardians', ['filter' => 'auth', 'auth.roles' => ['guardian']], function ($routes) {
    $routes->get('profile', 'GuardianController::profile');
    // Add more guardian-related routes as needed
});

// API ROUTES 
$routes->group('api', [], function($routes){

    $routes->get('check-username', 'ViewUsersPage::checkUsername');

});