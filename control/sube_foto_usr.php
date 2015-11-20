<?php
    foreach($_FILES['imagess']['error'] as $key => $error){
        if($error == UPLOAD_ERR_OK){
            $name = '../usuarios/nico/new.png';
            move_uploaded_file($_FILES['imagess']['tmp_name'][$key], $name);
        }
    }
    
    echo "<h2>Archivos correctamente subidos</h2>";
?>