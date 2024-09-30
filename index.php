<?php

require_once __DIR__.'/config/init.php';

$request = $_SERVER['REQUEST_URI'];
$output = [];

echo $request;

if(strpos($request, 'Admin')) {
    require_once ROOT.'/Routes/Admin.php';
} else if($request === '/') {
    require_once ROOT.'/Routes/Nurse.php';
}  else  {
    require_once ROOT.'/404.php';
}


