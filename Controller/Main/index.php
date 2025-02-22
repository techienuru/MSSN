<?php
$title = 'Home';

$blogs = $db->table('blog')->limit(10)->orderBy('blog_id')->get();
$events = $db->table('event')->limit(10)->orderBy('event_id')->get();
$excos = $db->table('excos')->limit(3)->orderBy('exco_id')->get();


require_once $MainTemplate.'/includes/header.php';
require_once $MainTemplate.'/index.php';
require_once $MainTemplate.'/includes/footer.php';