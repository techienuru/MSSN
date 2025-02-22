<?php
$title = 'Library';

//SETTING PAgination

$limit = 10;
$offset = 0;
$page = 1; 


// GETTING BLOGS AND EVENTS FROM DATABASE 

$ebooks = $db->table('ebook')->limit($limit)->offset($offset)->orderBy('ebook_id')->get();
$past_questions = $db->table('pq')->limit($limit)->offset($offset)->orderBy('pq_id')->get();

// GET FACULTY
$faculty = $db->table('faculty')->get();


require_once $MainTemplate.'/includes/header.php';
require_once $MainTemplate.'/library.php';
require_once $MainTemplate.'/includes/footer.php';