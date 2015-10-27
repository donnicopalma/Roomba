<?php
    
	include('resize.php');
	include('carga_archivos.php');
			
	$mygallery = new gallery();
	$mygallery->loadFolder('galley_images');
	$mygallery->save();	
    
?>