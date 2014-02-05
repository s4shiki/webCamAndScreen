<?php

	$file = $_FILES['my_img'];

	$ext = substr($file['name'], -3);
	
	if ($ext == 'jpg'){
		$filePath ='data/' . $file['name'];
		move_uploaded_file($file['tmp_name'] , $filePath);
	}

?>