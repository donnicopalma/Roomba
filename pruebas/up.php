
<?php
$uploadedfile = "";
$target_path = "as/";
$target_path = $target_path.basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
{ 
}else{
echo "Ha ocurrido un error, trate de nuevo!";
} 
?>