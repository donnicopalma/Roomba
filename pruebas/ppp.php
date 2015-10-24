<?
include_once('thumb.php');
$mythumb = new thumb();
$mythumb->loadImage('./galley_images/archive-shenmue0.jpg');
$mythumb->resize(100, 'width');
$mythumb->show();
?>