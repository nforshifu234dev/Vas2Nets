<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\StudentModel;
use App\Models\GuardianModel;

use App\Controllers\CreatePage;

use CodeIgniter\HTTP\ResponseInterface;

class ViewStudentsPage extends BaseController
{

    protected $studentsModel;

    public function __construct() {
        $this->studentsModel = new StudentModel();
    }

    public function index()
    {

        // Set up pagination
        $pager = \Config\Services::pager();
        $perPage = 20; // Adjust the number of records per page as needed

        // Fetch users from the database and pass them to the view
        // $data['users'] = $this->studentsModel->getAllUsers();

        // Fetch users from the database and pass them to the view
        $data['users'] = $this->studentsModel->paginate($perPage);
        $data['pager'] = $this->studentsModel->pager;

        return view('view_students_page', $data);
    }

    function new()
    {
        return view('new_students_page');
    }

    function create()
    {

        $createPageModel = new CreatePage();

        $createPageModel->create();

    }



}
