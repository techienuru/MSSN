<?php

// ROUTER - SHURAIH99 PLS DONT TOUCH
require_once __DIR__.'/config/init.php';

$request = $_SERVER['REQUEST_URI'];
$output = [];

function getURL()
{
  $host = $_SERVER['HTTP_HOST'];
  $request_uri = $_SERVER['REQUEST_URI'];
  $request_uri = parse_url($request_uri, PHP_URL_PATH);
  return trim($host . $request_uri, '/');
}

$request_uri = getURL();
$request_path = $request_uri;

if(strpos($request, 'Admin')) {
    require_once ROOT.'/Routes/Admin.php';
} else  {
    require_once ROOT.'/Routes/Main.php';
}


