<?php
$id = $output[1];

$file = $db->table('pq')->where('pq_id', $id)->first();

if ($file) {
    $extension = strtoupper(pathinfo($file['file'], PATHINFO_EXTENSION));
    $filename = $file['title'].' '.$file['level'].' Level.'.strtolower($extension);
    $path = __DIR__ . '/../../public/files/pq/' . $file['file'];

    fileDownload($path, $filename, $extension);
} else {
    die("File not found.");
}


