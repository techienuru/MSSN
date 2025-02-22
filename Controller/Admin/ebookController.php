<?php

$title = "Islamic Ebooks";

$faculties = $db->table('faculty')->get();

require_once $AdminTemplate.'/includes/header.php';
require_once $AdminTemplate.'/pages/islamic-ebook.php';
require_once $AdminTemplate.'/includes/footer.php';
