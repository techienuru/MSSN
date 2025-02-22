<?php
$title = 'Blog';

//SETTING PAgination

$limit = 10;
$offset = 0;
$page = 1; 


// GETTING BLOGS AND EVENTS FROM DATABASE 

$blogs = $db->table('blog')->limit($limit)->offset($offset)->orderBy('blog_id')->get();
$events = $db->table('event')->limit($limit)->offset($offset)->orderBy('event_id')->get();


require_once $MainTemplate.'/includes/header.php';
require_once $MainTemplate.'/blog.php';
require_once $MainTemplate.'/includes/footer.php';