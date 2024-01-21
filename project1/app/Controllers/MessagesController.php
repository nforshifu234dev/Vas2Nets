<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use \App\Helpers\MyHelper as RandomStringGenerator;
use App\Models\ContactUsModel;
use CodeIgniter\HTTP\ResponseInterface;

class MessagesController extends BaseController
{

    protected $contactUsModel;

    public function __construct() {
        $this->contactUsModel = new ContactUsModel();
    }

    public function index()
    {

        // Set up pagination
        $pager = \Config\Services::pager();
        $perPage = 10; // Adjust the number of records per page as needed

        // Fetch users from the database and pass them to the view
        $data['messages'] = $this->contactUsModel->paginate($perPage);
        $data['pager'] = $this->contactUsModel->pager;

        return view('view_messages_page', $data);

    }

}