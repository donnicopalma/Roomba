<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Gallery Example</title>

</head>

<body>

	<div align="center">
    
		<?php
			
			include_once('gallery.php');
			
			$mygallery = new gallery();
			$mygallery->loadFolder('galley_images');
			$mygallery->show(500, 60, 10);
			
			$mygallery2 = new gallery();
			$mygallery2->loadFolder('galley_images');
			$mygallery2->show(500, 60, 10);
		
		?>
    
    </div>

</body>
</html>