<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\GuardianModel;

use CodeIgniter\HTTP\ResponseInterface;

class ViewUsersPage extends BaseController
{

    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index()
    {

        // Set up pagination
        $pager = \Config\Services::pager();
        $perPage = 1; // Adjust the number of records per page as needed

        // Fetch users from the database and pass them to the view
        // $data['users'] = $this->userModel->getAllUsers();

        // Fetch users from the database and pass them to the view
        $data['users'] = $this->userModel->paginate($perPage);
        $data['pager'] = $this->userModel->pager;

        return view('view_users_page', $data);
    }

    function new()
    {
        return view('new_user_page');
    }

    public function students()
    {

        $studentModel = new StudentModel();

        // Set up pagination
        $pager = \Config\Services::pager();
        $perPage = 1; // Adjust the number of records per page as needed

        // Fetch users from the database and pass them to the view
        // $data['users'] = $this->userModel->getAllUsers();

        // Fetch users from the database and pass them to the view
        $data['users'] = $studentModel->paginate($perPage);
        $data['pager'] = $studentModel->pager;

        return view('view_students_page', $data);
    }

    public function guardians()
    {

        $gguardiansModel = new GuardianModel();

        // Set up pagination
        $pager = \Config\Services::pager();
        $perPage = 1; // Adjust the number of records per page as needed

        // Fetch users from the database and pass them to the view
        // $data['users'] = $this->userModel->getAllUsers();

        // Fetch users from the database and pass them to the view
        $data['users'] = $gguardiansModel->paginate($perPage);
        $data['pager'] = $gguardiansModel->pager;

        return view('view_guardians_page', $data);
    }


}
