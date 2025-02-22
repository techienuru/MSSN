<?php

$title = "Excos";

$session = $db->table('session')->get();

$excos = $db->table(table: 'excos')->get();

require_once $AdminTemplate.'/includes/header.php';
require_once $AdminTemplate.'/pages/excos.php';
require_once $AdminTemplate.'/includes/footer.php';
