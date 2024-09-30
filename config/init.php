<?php
if(!session_id()) {
    session_start();
}
use App\General;
require_once __DIR__.'/db.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/../vendor/autoload.php';

$db = new DBFlex('mysql', $dbhost, $dbuser, $dbpass, $dbname);


$controller = ROOT.'/Controller';
$view = ROOT.'/View';
$AdminCont = $controller.'/Admin';
$AdminTemplate = $view.'/Admin';
$NurseCont = $controller.'/Nurse';
$NurseView = $view.'/Nurse';
$DoctorCont = $controller.'/Doctor';
$DoctorView = $view.'/Doctor';


require_once __DIR__.'/functions.php';