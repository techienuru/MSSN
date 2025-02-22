<?php

$title = "Department";

$faculty = $db->table('faculty')->get();

require_once $AdminTemplate.'/includes/header.php';
require_once $AdminTemplate.'/pages/department.php';
require_once $AdminTemplate.'/includes/footer.php';
