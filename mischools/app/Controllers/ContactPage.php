<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ContactPage extends BaseController
{
    public function index()
    {
        return view('contact_page');
    }
}
