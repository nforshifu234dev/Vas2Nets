<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CreatePage extends BaseController
{
    public function index()
    {
        //
        return view('create_page');
    }
}
