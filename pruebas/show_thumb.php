<?php

	$src = $_GET['src'];
	$width = $_GET['width'];
	include_once('thumb.php');

	$image = new thumb();
	$image->loadImage($src);
	$image->crop($width, $width);
	$image->show();

?>