<?php 

// app/Controllers/DashboardController.php

namespace App\Controllers;

use App\Models\ContactUsModel;
use CodeIgniter\Controller;

use App\Models\UserModel;
use App\Models\GuardianModel;
use App\Models\StudentModel;

class DashboardController extends Controller
{
    public function index()
    {

        $userModel = new UserModel();
        $guardianModel = new GuardianModel();
        $studentModel = new StudentModel();
        $ContactUsModel = new ContactUsModel();

        $data = [
            'lastUsers' => $userModel->getLastUsers(),
            'lastGuardians' => $guardianModel->getLastGuardians(),
            'lastStudents' => $studentModel->getLastStudents(),
            'lastMessages' => $ContactUsModel->getLastUnreadMessages(),
            'totalNumberOfUsers' => count($userModel->findAll()),
            'totalNumberOfGuardians' => count($guardianModel->findAll()),
            'totalNumberOfStudents' => count($studentModel->findAll()),
            'totalNumberOfMessages' => count($ContactUsModel->findAll()),
            'totalNumberOfUnreadMessages' => $ContactUsModel->where('has_viewed', 0)->countAllResults(),
            'totalNumberOfUnrepliedMessages' => $ContactUsModel->where('has_replied', 0)->countAllResults(),
            'totalNumberOfAdmins' => $userModel->where('role', 'admin')->countAllResults() ,
            'totalNumberOfStudents' => $userModel->where('role', 'admin')->countAllResults() ,
            'totalNumberOfUsers2' => $userModel->where('role', 'user')->countAllResults() ,
        ];

        return view('dashboard/index', $data);
    }
}


