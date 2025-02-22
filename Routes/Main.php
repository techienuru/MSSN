<?php

// ROUTES
$homeExp = '/' . BASE_URL . '$/i';
$aboutPage = '/\/about$/';
$blogPage = '/\/blog$/';
$eventPage = '/\/event$/';
$excosPage = '/\/excos$/';
$library = '/\/library$/';
$blogDetails = '/\/blog\/([a-z0-9-]+)$/i';
$eventDetails = '/\/event\/([a-z0-9-]+)$/i';
$pqDownload = '/\/dl\-pq\/([a-z0-9-]+)$/i';
$ebDownload = '/\/dl\-eb\/([a-z0-9-]+)$/i';


$output = array();
$output2 = array();
if (preg_match($homeExp, $request_path, $output)) {
    require_once $MainController.'/index.php';
} else if(preg_match($aboutPage, $request_path, $output)) {
    require_once $MainController.'/about.php';
} else if(preg_match($blogPage, $request_path, $output)) {
    require_once $MainController.'/blog.php';
} else if(preg_match($library, $request_path, $output)) {
    require_once $MainController.'/library.php';
} else if(preg_match($excosPage, $request_path, $output)) {
    require_once $MainController.'/excos.php';
} else if(preg_match($blogDetails, $request_path, $output)) {
    require_once $MainController.'/blog-details.php';
} else if(preg_match($eventDetails, $request_path, $output)) {
    require_once $MainController.'/event-details.php';
}  else if(preg_match($pqDownload, $request_path, $output)) {
    require_once $MainController.'/pqDownload.php';
} else if(preg_match($ebDownload, $request_path, $output)) {
    require_once $MainController.'/ebDownload.php';
} else {

    header("HTTP/1.1 404 Not Found");
    require_once $view.'/404.php';
}
