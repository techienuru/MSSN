<?php
use App\Auth;

$title = 'Admin Login';
$Auth = new Auth();

if($Auth->isLogin()) {
    Redirect(APP_URL);
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $login = $Auth->Login($email, $password, $db);



    if($login['s'] == 1) {
        $success = $login['m'];
        Redirect(ADMIN_URL.'/dashboard');
    } else {
        $error = $login['m'];
    }
}

require_once $AdminTemplate.'/login.php';