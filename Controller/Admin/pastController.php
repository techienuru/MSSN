<?php

$title = "Past Question and Answers";

$faculties = $db->table('faculty')->get();

require_once $AdminTemplate.'/includes/header.php';
require_once $AdminTemplate.'/pages/pastq&a.php';
require_once $AdminTemplate.'/includes/footer.php';
