<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\GuardianModel;

use CodeIgniter\HTTP\ResponseInterface;

class ViewGuardiansPage extends BaseController
{

    protected $guardianModel;

    public function __construct() {
        $this->guardianModel = new GuardianModel();
    }

    public function index()
    {

        // Set up pagination
        $pager = \Config\Services::pager();
        $perPage = 1; // Adjust the number of records per page as needed

        // Fetch users from the database and pass them to the view
        // $data['users'] = $this->guardianModel->getAllUsers();

        // Fetch users from the database and pass them to the view
        $data['users'] = $this->guardianModel->paginate($perPage);
        $data['pager'] = $this->guardianModel->pager;

        return view('view_guardians_page', $data);
    }

    function new()
    {
        return view('new_guardians_page');
    }



}
