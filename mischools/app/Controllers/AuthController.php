<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

use Config\Services;

class AuthController extends Controller
{
    public $session;

    // Load the session library in the constructor
    public function __construct()
    {
        $this->session = Services::session();
    }

    public function login()
    {
        if ($this->session->has('user_id')) {
            return redirect()->to(site_url('dashboard/'));
        }
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $request = service('request');
        $requestData = $request->getJSON(true)['formDetails'];
        $username = $requestData['username'];
        $password = $requestData['password'];
        $rememberMe = $requestData['remember_me'];
        $redirect = $requestData['return_url'];
    
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first() ?? $userModel->where('email', $username)->first() ?? false;
    
        if ($user ) {
            if (!password_verify($password, $user['password'])) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Password is not correct']);
            }

            // Set user session
            $this->session->set('user_id', $user['user_id']);
    
            // Set remember me cookie if checked
            if ($rememberMe) {
                $this->response->setCookie('remember_me', $user['user_id'], 3600 * 24 * 30); // 30 days expiration
            }
    
            // Return success JSON response
            return $this->response->setJSON(
                [
                    'status' => 'success', 
                    'message' => 'Login successful', 
                    'redirect' => $redirect && $redirect !== '' ? $redirect : '/dashboard'
                ]
            );
        } else {
            // Return error JSON response
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid username']);
        }
    }

    public function logout()
    {
        // Destroy session and remove remember me cookie
        $this->session->destroy();
        $this->response->deleteCookie('remember_me');

        return redirect()->to( base_url() );
    }
}
