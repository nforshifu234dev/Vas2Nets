<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use \App\Helpers\MyHelper as RandomStringGenerator;

use CodeIgniter\HTTP\ResponseInterface;

class CreatePage extends BaseController
{
    public function index()
    {
        //
        return view('create_page');
    }

    public function create()
    {
        // $csrf = \Config\Services::csrf();

        $request = service('request');
        $validation = \Config\Services::validation();
        $userModel = new \App\Models\UserModel();
        $guardianModel = new \App\Models\GuardianModel();
        $studentModel = new \App\Models\StudentModel();

        // CSRF protection

        // $requestData = $request->getJSON(true);
        // var_dump( $requestData );

        // Verify CSRF token
        // $rawInput = $request->getRawInput();
        // $csrfToken = $rawInput['csrf_token'] ?? null;

        // var_dump($requestData);

        // exit;

        // CSRF protection
        // if (!$csrf->check($request->getPost('csrf_token'))) {
        //     return $this->response
        //         ->setStatusCode(200) // Forbidden
        //         ->setJSON(['error' => 'Invalid CSRF token']);
        // }

        // if (!$csrf->check($csrfToken)) {
        //     return $this->response
        //         ->setStatusCode(200) // Forbidden
        //         ->setJSON(['error' => 'Invalid CSRF token']);
        // }

        // echo $request->getPost('csrf_token');

        // echo true;
        // exit;
        

        // Set validation rules for all fields
        $validationRules = [
            'sName' => 'required|max_length[50]',
            'fName' => 'required|max_length[50]',
            'oNames' => 'max_length[100]', // Optional, adjust as needed
            'dob' => 'required|valid_date',
            'gender' => 'required|in_list[male,female,other]',
            'nationality' => 'required|max_length[50]',
            'email' => 'required|valid_email|max_length[100]',
            'country_code' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'street' => 'required|max_length[255]',
            'city' => 'required|max_length[100]',
            'state' => 'required|max_length[100]',
            'zipcode' => 'required|max_length[20]',
            'academic_session' => 'required|max_length[50]',
            'enrollment_type' => 'required|in_list[new,transfer]',
            'program' => 'required|max_length[100]',
            'guardian_name' => 'required|max_length[100]',
            'guardian_role' => 'required|max_length[50]',
            'guardian_email' => 'required|valid_email|max_length[100]',
            'guardian_phone' => 'required|numeric', // Assuming it's a numeric phone number
            'user_username' => 'required|max_length[50]',
            'user_password' => 'required|min_length[8]', // Adjust as needed
            't&c' => 'required|in_list[1]', // Assuming the checkbox value is 1 for true
        ];

        // Run validation
        

        if ( $validation->setRules($validationRules)->run((array) $request->getJSON()) ) {
            return $this->response
                ->setStatusCode(400) // Bad Request
                ->setJSON(['error' => $validation->getErrors()]);
        }

        // If validation passes, proceed to insert data into the respective tables
        $requestData = $request->getJSON(true)['formDetails'];

        // var_dump($requestData);

        // exit;

    // Generate unique IDs for user and guardian
    $userId = 'USER_' . RandomStringGenerator::generateRandomString(30);
    $guardianId = 'GUARDIAN_' . RandomStringGenerator::generateRandomString(30);



    // Insert data into the users table
    // Insert data into the users table


    $userInserted = $userModel->insert([
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


        $guardianInserted = $guardianModel->insert([
            'child_user_id' => $userId,
            'id' => $guardianId,
            'name' => $requestData['guardian_name'],
            'email' => $requestData['guardian_email'],
            'phone' => $requestData['guardian_phone'],
            // Add other guardian-specific fields
        ]);

            // Insert data into the students table
        $studentInserted = $studentModel->insert([
            'user_id' => $userId,
            'guardian_id' => $guardianId,
            'surname' => $requestData['sName'],
            'first_name' => $requestData['fName'],
            'other_names' => $requestData['oNames'],
            'date_of_birth' => $requestData['dob'],
            'gender' => $requestData['gender'],
            'nationality' => $requestData['nationality'],
            'country_code' => $requestData['country_code'],
            'phone_number' => $requestData['phone_number'],
            'street' => $requestData['street'],
            'city' => $requestData['city'],
            'state' => $requestData['state'],
            'zipcode' => $requestData['zipcode'],
            'academic_session' => $requestData['academic_session'],
            'enrollment_type' => $requestData['enrollment_type'],
            'program' => $requestData['program'],
            // Add other student-specific fields
        ]);

        // Check if all data was inserted successfully
        if ($guardianInserted && $studentInserted) {
            // Return success response
            $response = [
                'status' => 'success',
                'message' => 'User, guardian, and student created successfully',
                'data' => $requestData,
            ];

            return $this->response->setStatusCode(201)->setJSON($response);
            // return $this->response->setJSON($response)->setStatusCode(201);
            // $response = $this->response->setJSON($response);
            // return $response->setStatusCode(201);
            // return $this->respondCreated($response);
            // return $this->response->setStatusCode(201)->setJSON($response)->setHeader('Content-Type', 'application/json');
            // return $this->response
            //                 ->setStatusCode(201)
            //                 ->setJSON($response)
            //                 ->setHeader('Content-Type', 'application/json');


        }

    }

    



// Return error response
return $this->response
    ->setStatusCode(500) // Internal Server Error
    ->setJSON(['error' => 'Failed to create user, guardian, and student']);

    }



}
