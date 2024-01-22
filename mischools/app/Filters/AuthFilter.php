<?php 

// app/Filters/AuthFilter.php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = \Config\Services::session();
        $current_url = current_url();
        $csrf_token = csrf_token();


        // Check if the user is logged in
        if (!$session->has('user_id')) {
            return redirect()->to(site_url('login/?type=not_logged_in&crsf=' . $csrf_token . '&return_url=' . $current_url ));
        }

        // Check user role
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($session->get('user_id'));

        // Check if the user has any of the required roles for the current route
        $requiredRoles = $arguments['auth.roles'] ?? [];

        if (!empty($requiredRoles) && !in_array($user['role'], $requiredRoles)) {
            // Redirect or show an error for users with incorrect roles
            return redirect()->to('/dashboard')->with('error', 'You do not have permission to access this page.');
        }

        // If no issues, allow the request to proceed
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing here
    }
}

?>