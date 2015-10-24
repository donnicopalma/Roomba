    <?php
    
    include("resize.php");
	include_once('res_files.php');
			
	$mygallery = new gallery();
	$mygallery->loadFolder('galley_images');
	$mygallery->show();

    $thumb=new thumbnail($mygallery->show());
    $thumb->size_height(250);
    $thumb->jpeg_quality(80);
    $thumb->save($mygallery->show());
    
    ?>