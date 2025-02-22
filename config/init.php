<?php
if(!session_id()) {
    session_start();
}
use App\General;
require_once __DIR__.'/db.php';
require_once __DIR__.'/config.php';
require_once __DIR__.'/../vendor/autoload.php';

$db = new DBFlex('mysql', $dbhost, $dbuser, $dbpass, $dbname);

function db() {
    global $db;
    return $db;
}


$controller = ROOT.'/Controller';
$view = ROOT.'/Template';
$AdminCont = $controller.'/Admin';
$AdminTemplate = $view.'/Admin';
$MainController = $controller.'/Main';
$MainTemplate = $view.'/Main';
$image_fol = PUBLIC_URL.'/images/';
$admin_assets = PUBLIC_URL.'/Admin/';


require_once __DIR__.'/functions.php';