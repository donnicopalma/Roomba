<?php

	require_once ("config.php");
		
	$id_elemento = $_POST['oid'];
	
		$sql_elimina_elemento = "DELETE FROM `objeto` WHERE `id` = '$id_elemento'";
			if ($result = mysql_query($sql_elimina_elemento)) {
				
			} else {
			    echo "Error updating record: " . mysql_error($link);
			}
?>