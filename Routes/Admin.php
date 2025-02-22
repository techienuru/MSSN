<?php

use App\Auth;

$loginPage = '/\/Admin\/login$/';
$logoutPage = '/\/Admin\/logout$/';
$homePage = '/\/Admin\/dashboard$/';
$sessionPage = '/\/Admin\/session$/';
$facultyPage = '/\/Admin\/faculty$/';
$departmentPage = '/\/Admin\/department$/';
$blogPage = '/\/Admin\/blog$/';
$eventPage = '/\/Admin\/event$/';
$pastqaPage = '/\/Admin\/pastqa$/';
$ebookPage = '/\/Admin\/ebook$/';
$excosPage = '/\/Admin\/excos$/';
$medicalPage = '/\/Admin\/medical-record$/';
$accountPage = '/\/Admin\/account$/';
$process = '/\/Admin\/process\/([a-z0-9-]+)$/i';
$adminHome = '/\/Admin$/';
$active = 0;

// Redirect users to login if they are not logged in and the request is not the login page
if (!isset($_SESSION['AdminID']) && !preg_match($loginPage, $request)) {
    Redirect(APP_URL . '/Admin/login');
    exit;
}

// If logged in and request is /Admin, redirect to dashboard
if (isset($_SESSION['AdminID']) && preg_match($adminHome, $request)) {
    Redirect(APP_URL . '/Admin/dashboard');
    exit;
}

// Handle different routes
if (preg_match($loginPage, $request)) {
    require_once $AdminCont . '/loginController.php';
} elseif (preg_match($homePage, $request)) {
    $active = 1;
    require_once $AdminCont . '/dashboardController.php';
} elseif (preg_match($sessionPage, $request)) {
    $active = 2;
    require_once $AdminCont . '/sessionController.php';
} elseif (preg_match($process, $request, $output)) {
    $page = $output[1];
    require_once $AdminCont . '/process/' . $page . '.php';
} elseif (preg_match($facultyPage, $request)) {
    $active = 3;
    require_once $AdminCont . '/facultyController.php';
} elseif (preg_match($departmentPage, $request)) {
    $active = 4;
    require_once $AdminCont . '/departmentController.php';
} elseif (preg_match($blogPage, $request)) {
    $active = 5;
    require_once $AdminCont . '/blogController.php';
} elseif (preg_match($eventPage, $request)) {
    $active = 8;
    require_once $AdminCont . '/eventController.php';
} elseif (preg_match($pastqaPage, $request)) {
    $active = 9;
    require_once $AdminCont . '/pastController.php';
} elseif (preg_match($ebookPage, $request)) {
    $active = 10;
    require_once $AdminCont . '/ebookController.php';
} elseif (preg_match($excosPage, $request)) {
    $active = 11;
    require_once $AdminCont . '/ExcosController.php';
} elseif (preg_match($logoutPage, $request)) {
    $logout = (new Auth)->logout();
    Redirect(APP_URL . '/Admin/login');
    exit;
} else {
    header("HTTP/1.1 404 Not Found");
    require_once $view . '/404.php';
}
