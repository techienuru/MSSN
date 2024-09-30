<?php

require_once __DIR__.'/config/init.php';

$request = $_SERVER['REQUEST_URI'];
$output = [];


if(strpos($request, 'Admin')) {
    require_once ROOT.'/Routes/Admin.php';
} else if($request === '/') {
    require_once ROOT.'/Routes/Main.php';
}  else  {
    require_once ROOT.'/404.php';
}


