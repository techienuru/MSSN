<?php
$id = $output[1];

$file = $db->table('ebook')->where('ebook_id', $id)->first();

if ($file) {
    $extension = strtoupper(pathinfo($file['file'], PATHINFO_EXTENSION));
    $filename = $file['title'].'.'.strtolower($extension);
    $path = __DIR__ . '/../../public/files/ebook/' . $file['file'];

    fileDownload($path, $filename, $extension);
} else {
    die("File not found.");
}


