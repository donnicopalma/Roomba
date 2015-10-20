<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Gallery Example</title>

<link href="css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />

<script src="scripts/jquery-1.3.2.js" language="javascript"></script>
<script src="scripts/jquery.lightbox-0.5.js" language="javascript"></script>

</head>

<body>

	<div align="center">
    
		<?php
			
			include_once('gallery.php');
			
			$mygallery = new gallery();
			$mygallery->loadFolder('galley_images');
			$mygallery->show(700, 60, 10);
		
		?>
    
    </div>

</body>
</html>