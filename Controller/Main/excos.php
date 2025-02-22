<?php
$title = 'Excos';

//SETTING PAgination

$limit = 10;
$offset = 0;
$page = 1; 


// GETTING excos FROM DATABASE 

$excos = $db->table('excos')->limit($limit)->offset($offset)->orderBy('exco_id')->get();

// GET FACULTY
$faculty = $db->table('faculty')->get();


require_once $MainTemplate.'/includes/header.php';
require_once $MainTemplate.'/excos.php';
require_once $MainTemplate.'/includes/footer.php';