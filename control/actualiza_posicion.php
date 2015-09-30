<?php

	require_once ("config.php");
	
	$id = $_POST['tid'];
	$left = $_POST['tleft'];
	$top = $_POST['ttop'];
	
	$sql_guarda_pocision = "UPDATE `objeto` SET `left` = '$left', `top` = '$top' WHERE `id` ='$id'";
		
	if ($result = mysql_query($sql_guarda_pocision)) {
	    
	} else {
	    echo "Error updating record: " . mysql_error($link);
	}

?>