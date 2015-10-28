<?php
    $carpeta = $_POST['carpeta'];
	include('resize.php');
	include('carga_archivos.php');
	$mygallery = new gallery();
	$mygallery->loadFolder($carpeta);
	$mygallery->save();	
	
			echo "im&aacute;genes redimensionadas";
    
?>