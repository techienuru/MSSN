<?php
use App\Auth;

$loginPage = '/\/Admin\/login/';
$logoutPage = '/\/Admin\/logout/';
$homePage = '/\/Admin\/home/';
$doctorPage = '/\/Admin\/doctor/';
$nursePage = '/\/Admin\/nurse/';
$patientPage = '/\/Admin\/patient/';
$appointmentPage = '/\/Admin\/appointment/';
$medicalPage = '/\/Admin\/medical-record/';
$accountPage = '/\/Admin\/account/';
$process = '/\/Admin\/process\/([a-z0-9-]+)/i';
$active = 0;

if(!isset($_SESSION['AdminID']) && $request !== '/Admin/login') {
    Redirect(APP_URL.'/Admin/login');
} else {

    if(preg_match($loginPage, $request, $output)) {
        require_once $AdminCont.'/loginController.php';
    } else if(preg_match($homePage, $request, $output)) {
        $active = 1;
        require_once $AdminCont.'/HomeController.php';
    }else if(preg_match($doctorPage, $request, $output)) {
        $active = 2;
        require_once $AdminCont.'/DoctorController.php';
    }else if(preg_match($process, $request, $output)) {
        $page = $output[1];
        require_once $AdminCont.'/process/'.$page.'.php';
    }else if(preg_match($nursePage, $request, $output)) {
        $active = 3;
        require_once $AdminCont.'/NurseController.php';
    } else if(preg_match($patientPage, $request, $output)) {
        $active = 4;
        require_once $AdminCont.'/PatientController.php';
    }  else if(preg_match($appointmentPage, $request, $output)) {
        $active = 5;
        require_once $AdminCont.'/AppointmentController.php';
    }  else if(preg_match($medicalPage, $request, $output)) {
        $active = 6;
         require_once $AdminCont.'/MedicalController.php';
    }  else if(preg_match($accountPage, $request, $output)) {
        $active = 7;
        require_once $AdminCont.'/AccountController.php';
    }  else if(preg_match($logoutPage, $request, $output)) {
       
        $logout = (new Auth)->logout();
        echo $logout;
        Redirect(ADMIN_URL.$loginPage);
        
    } else {
        
        require_once $view.'/404.php';
    }
}



