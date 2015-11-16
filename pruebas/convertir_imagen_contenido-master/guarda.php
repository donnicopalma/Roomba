    <?php
    $img = $_POST['datax'];
	
    $data = str_replace('data:image/png;base64,', '', $img);
	
	
    if ($data !== false) {
        file_put_contents('image.png', base64_decode($data));
    }
    else {
        echo 'Un error ocurrio al convertir la imagen.';
    }
    ?>