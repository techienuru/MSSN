<?php
$id = $output[1];

// GETTING excos FROM DATABASE 

$post = $db->table('event')->where('event_id', $id)->first();

$title = $post['title'];



require_once $MainTemplate.'/includes/header.php';
require_once $MainTemplate.'/event-details.php';
require_once $MainTemplate.'/includes/footer.php';