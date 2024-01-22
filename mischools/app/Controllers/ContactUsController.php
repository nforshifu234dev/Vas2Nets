<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactUsModel;
use CodeIgniter\HTTP\ResponseInterface;

use \App\Helpers\MyHelper as RandomStringGenerator;


class ContactUsController extends BaseController
{
    public function index()
    {
        // Load the view
        return view('contact_page');
    }

    public function sendMessage()
    {
        $request = service('request');
        $validation = \Config\Services::validation();
        $contactModel = new ContactUsModel();

        $validationRules = [
            'name' => 'required|max_length[100]',
            'email' => 'required|valid_email|max_length[100]',
            'message' => 'required',
        ];

        if ( $validation->setRules($validationRules)->run((array) $request->getJSON()) ) {
            return $this->response
                ->setStatusCode(400) // Bad Request
                ->setJSON(
                    [
                        'status' => 'failed',
                        'message' => 'input validation failed',
                        'error' => $validation->getErrors()
                    ]
                );
        }

        $requestData = $request->getJSON(true)['formDetails'];

        $mail_id = 'MAIL_' . date('Y-m-d') . '_' . RandomStringGenerator::generateRandomString(15);

        $sentToDb = $contactModel->insert([

            'name' => $requestData['name'],
            'email' => $requestData['email'],
            'message' => $requestData['message'],
            'mailid' => $mail_id,
            'date_time_sent' => date('Y-m-d H:i:s'),

        ]);

        if ( $sentToDb )
        {

            // Return success response
            $response = [
                'status' => 'success',
                'message' => 'message sent successfully',
                'data' => $requestData,
            ];

            return $this->response->setStatusCode(200)->setJSON($response);

        }

        // Return error response
        return $this->response
        ->setStatusCode(500) // Internal Server Error
        ->setJSON(['error' => 'Failed to send message.']);


    }

}
