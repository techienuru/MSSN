<?php

require_once('../src/DBFlex.php');

$db = new DBFlex('localhost', 'root', '', 'dbflex');


$data =  [
    'name' => 'Malam Garba',
    'email' => 'testing@gmail.com',
    'address' => 'Ganaganaaakjskjskj',
    'status' => 1

];





$rows = $db->table('users')->where('id', 12, '>')->orWhere('id', 7, '<')->where('status', 0)->get();
echo print_r($rows);
foreach($rows as $row) 
{
    echo $row['id']." ".$row['email']."<br>";
}

