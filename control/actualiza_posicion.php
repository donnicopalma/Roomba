<?php

	require_once ("config.php");
	
	$id = $_POST['tid'];
	$left = $_POST['tleft'];
	$top = $_POST['ttop'];
	$src = $_POST['ttitle'];
	$id_fixed = (int)$id;
	
	$comprueba_pos = mysql_query("SELECT id FROM objeto WHERE id = '$id'");

	if(mysql_fetch_array($comprueba_pos,MYSQL_ASSOC))	{
		$sql_guarda_pocision = "UPDATE `objeto` SET `left` = '$left', `top` = '$top' WHERE `id` ='$id'";
		
		if ($result = mysql_query($sql_guarda_pocision)) {
			    
		} else {
		    echo "Error updating record: " . mysql_error($link);
		}

	} else {
		$left_fixed = $left;
		$top_fixed = $top;
		$sql_nuevo_objeto = "INSERT INTO objeto ( `id` ,`id_cuarto` ,`id_tipo_objeto` ,`ruta` ,`z-index` ,`alto` ,`ancho` ,`left` ,`top`) VALUES (
		'$id_fixed',  1, 2, '$src', 0, 0, 0, '$left_fixed', '$top_fixed'
		);";
		$result2 = mysql_query($sql_nuevo_objeto);
	}
	
	
?>