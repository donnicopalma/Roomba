<?php
    foreach($_FILES['images']['error'] as $key => $error){
        if($error == UPLOAD_ERR_OK){
            $name = 'new.png';
            move_uploaded_file($_FILES['images']['tmp_name'][$key], $name);
        }
    }
    
    echo "<h2>Archivos correctamente subidos</h2>";
?>