<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;
use \App\Helpers\MyHelper as RandomStringGenerator;

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
        $perPage = 10; // Adjust the number of records per page as needed

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

    function create()
    {

        $request = service('request');
        $validation = \Config\Services::validation();

        // Set validation rules for all fields
        $validationRules = [
            'sName' => 'required|max_length[50]',
            'fName' => 'required|max_length[50]',
            'oNames' => 'max_length[100]', // Optional, adjust as needed
            'email' => 'required|valid_email|max_length[100]',
            'user_username' => 'required|max_length[50]',
            'user_password' => 'required|min_length[8]', // Adjust as needed
        ];

        // Run validation
        

        if ( $validation->setRules($validationRules)->run((array) $request->getJSON()) ) {
            return $this->response
                ->setStatusCode(400) // Bad Request
                ->setJSON(['error' => $validation->getErrors()]);
                }

        $requestData = $request->getJSON(true)['formDetails'];

        $userId = 'USER_' . RandomStringGenerator::generateRandomString(30);

        $userInserted = $this->userModel->insert([
            'user_id' => $userId,
            'surname' => $requestData['sName'],
            'first_name' => $requestData['fName'],
            'other_names' => $requestData['oNames'],
            'email' => $requestData['email'],
            'username' => $requestData['user_username'],  // Make sure the field exists in the request
            'password' => password_hash($requestData['user_password'], PASSWORD_BCRYPT),
            'role' => $requestData['role'] ?? 'student',
            'last_login' => null,
            'date_created' => date('Y-m-d H:i:s'),
        ]);

        if ( $userInserted )
        {

            // Return success response
            $response = [
                'status' => 'success',
                'message' => 'User, guardian, and student created successfully',
                'data' => $requestData,
            ];

            return $this->response->setStatusCode(201)->setJSON($response);

        }

    // Return error response
        return $this->response
        ->setStatusCode(200) 
        ->setJSON(['error' => 'Failed to create user, guardian, and student']);


    }

}
