<?php

$home = "/";
$aboutPage = '/\/about/';
$blogPage = '/\/bog/';
$eventPage = '/\/event/';
$excosPage = '/\/excos/';
$library = '/\/library/';
$blogDetails = '/\/blog\/([a-z0-9-]+)/i';
$eventDetails = '/\/event\/([a-z0-9-]+)/i';

if($request === '/') {
    require_once $MainController.'/index.php';
}