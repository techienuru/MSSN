<?php

function Redirect($path) {
    header("location: $path");
}


function Input($str) {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $val = filter_input(INPUT_POST, $str, FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif($_SERVER['REQUEST_METHOD'] === 'GET') {
        $val = filter_input(INPUT_GET, $str, FILTER_SANITIZE_SPECIAL_CHARS);
    }
    $value = strip_tags($val);
    return $value;
}

function UploadImage($dir, $imageData) {

    $folder = PUBLIC_PATH.'/thumb/'.$dir;
    if(!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $imageName = $imageData['name'];
    $ext = pathinfo($imageName, PATHINFO_EXTENSION);
    $filename = rand(1000, 9999).time().'.'.$ext;
    $target =$folder.'/'.$filename;

    if(move_uploaded_file($imageData['tmp_name'], $target)) {
        return $dir.'/'.$filename;
    } else {
        return false;
    }
}