<?php
$id = $output[1];

// GETTING excos FROM DATABASE 

$post = $db->table('blog')->where('blog_id', $id)->first();

$title = $post['blog_title'];



require_once $MainTemplate.'/includes/header.php';
require_once $MainTemplate.'/blog-details.php';
require_once $MainTemplate.'/includes/footer.php';