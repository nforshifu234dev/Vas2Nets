<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

use CodeIgniter\HTTP\ResponseInterface;

class ViewUsersPage extends BaseController
{

    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Fetch users from the database and pass them to the view
        $data['users'] = $this->userModel->getAllUsers();
        return view('view_users_page', $data);
    }
}
