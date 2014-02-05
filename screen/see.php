<?php

$id = $_GET['id'];

// sort jpeg last date
exec ('ls -t -1 data/*', $img_path);

if (file_exists($img_path[$id])) {
    header('Content-Type: image/jpeg');
    // Output Jpeg gata
    readfile($img_path[$id]);
} else {
	header("HTTP/1.0 404 Not Found");
	die("Not Found");
}
?>