<?php
$image_path = 'data/img.jpeg';

if (file_exists($image_path)) {
    header('Content-Type: image/jpeg');
    // fileread から readfile に訂正
    readfile($image_path);
}
?>