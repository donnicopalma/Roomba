<?php

	require_once ("config.php");
		
	$id = $_POST['tid'];
	$left = $_POST['tleft'];
	$top = $_POST['ttop'];
	$alto = $_POST['talto'];
	$ancho = $_POST['tancho'];
	$zindex = $_POST['tzindex'];
	
	$comprueba_pos = mysql_query("SELECT id FROM objeto WHERE id = '$id'");
	
			
		if(mysql_fetch_array($comprueba_pos,MYSQL_ASSOC))	{
			$sql_guarda_pocision = "UPDATE `objeto` SET `z-index` = '$zindex', `alto` = '$alto', `ancho` = '$ancho', `left` = '$left', `top` = '$top' WHERE `id` ='$id'";
				$cambia_new_sql = "UPDATE `objeto` SET `new`='0' WHERE `id` ='$id'";
				$cambia_new = mysql_query($cambia_new_sql);
			if ($result = mysql_query($sql_guarda_pocision)) {
			
			} else {
			    echo "Error updating record: " . mysql_error($link);
			}
	
		} else {
			}
	
	
?>