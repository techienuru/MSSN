<?php

function Redirect($path)
{
    header("location: $path");
}


function Input($str)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $val = filter_input(INPUT_POST, $str, FILTER_SANITIZE_SPECIAL_CHARS);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $val = filter_input(INPUT_GET, $str, FILTER_SANITIZE_SPECIAL_CHARS);
    }
    $value = strip_tags($val);
    return $value;
}

function UploadImage($dir, $imageData)
{

    $folder = PUBLIC_PATH . '/thumb/' . $dir;
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $imageName = $imageData['name'];
    $ext = pathinfo($imageName, PATHINFO_EXTENSION);
    $filename = rand(1000, 9999) . time() . '.' . $ext;
    $target = $folder . '/' . $filename;

    if (move_uploaded_file($imageData['tmp_name'], $target)) {
        return $dir . '/' . $filename;
    } else {
        return false;
    }
}


function Renamess($str)
{
    $str = str_replace(' ', '_', trim($str));
    $str = preg_replace("/[^A-Za-z0-9-_.]/", "", $str);
    $str = str_replace('___', '_', $str);
    $str = str_replace('__', '_', $str);
    return $str;
}

function getExt($data)
{
    return pathinfo($data['name'], PATHINFO_EXTENSION);
}

function removeExtension($file)
{
    return pathinfo($file, PATHINFO_FILENAME);
}

function checkExt($name)
{
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $AllowExt = ['pdf', 'doc', 'docx', 'ppt', 'png', 'jpg', 'gif'];

    if (!in_array($ext, haystack: $AllowExt)) {
        return false;
    } else {
        return true;
    }
}

function checkFileExist($folder, $name, $ext)
{
    $filen = $folder . '/' . $name;
    $file = $name;

    while (file_exists($filen)) {
        // Remove extension and append a random number
        $nameWithoutExt = removeExtension($name);
        $file = $nameWithoutExt . '-' . rand(0, 999) . '.' . $ext;
        $filen = $folder . '/' . $file; // Update the file path for the next check
    }

    return $file;
}

function Upload($dir, $fileData)
{
    $folder = PUBLIC_PATH . '/files/' . $dir . '/';

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $name = Renamess($fileData['name']);
    $ext = pathinfo($fileData['name'], PATHINFO_EXTENSION);
    $file = checkFileExist($folder, $name, $ext);

    $upload_dir = $folder . $file;

    if (move_uploaded_file($fileData['tmp_name'], $upload_dir)) {
        return $file;
    } else {
        return false;
    }
}


function fileDownload($Path, $fileName, $ext)
{
    switch ($ext) {
        case 'TXT':
            $mime = "text/plain";
            break;
        case 'JPEG':
            $mime = "image/jpeg";
            break;
        case 'PNG':
            $mime = "image/png";
            break;
        case 'GIF':
            $mime = "image/gif";
            break;
        case 'PDF':
            $mime = "application/pdf";
            break;
        case 'DOC':
            $mime = "application/msword";
            break;
        case 'DOCX':
            $mime = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
            break;
        default:
            $mime = "application/octet-stream";
    }

    if (!file_exists($Path) || !is_readable($Path)) {
        die("File not found or not readable.");
    }

    header('Content-Type: ' . $mime);
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Content-Length: ' . filesize($Path));

    readfile($Path);
    exit;
}
