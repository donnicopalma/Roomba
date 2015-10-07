<?php

	require_once ("config.php");
		
	$src = $_POST['ttitle'];
	$id = $_POST['tid'];
	$left = $_POST['tleft'];
	$top = $_POST['ttop'];
	$id_fixed = (int)$id;
	
	$comprueba_pos = mysql_query("SELECT id FROM objeto WHERE id = '$id'");
	
				    
		if(mysql_fetch_array($comprueba_pos,MYSQL_ASSOC))	{
			$sql_guarda_pocision = "UPDATE `objeto` SET `left` = '$left', `top` = '$top' WHERE `id` ='$id'";
				
				$cambia_new_sql = "UPDATE `objeto` SET `new`='0' WHERE `id` ='$id'";
				$cambia_new = mysql_query($cambia_new_sql);
			if ($result = mysql_query($sql_guarda_pocision)) {
			
			} else {
			    echo "Error updating record: " . mysql_error($link);
			}
	
		} else {
			}
	
	
?>