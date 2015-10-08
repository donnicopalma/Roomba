<?php

	require_once ("config.php");
		
	$id = $_POST['oid'];
	$src = $_POST['ovalue'];
	
	$id_cuarto_sql = mysql_query("select id from cuarto where `id_user` = '$id'");
	$id_cuarto_dato = mysql_fetch_array($id_cuarto_sql);
	$id_cuarto = $id_cuarto_dato['id']; 

		$sql_nuevo_objeto = "INSERT INTO objeto ( `id` ,`id_cuarto` ,`id_tipo_objeto` ,`ruta` ,`z-index` ,`alto` ,`ancho` ,`left` ,`top`,`new`) VALUES (
		'',  '$id_cuarto', 2, '$src', 0, 0, 0, '0', '0', '1'
		);";
			if ($result = mysql_query($sql_nuevo_objeto)) {
				$comprueba_pos = "SELECT * FROM objeto WHERE `id_cuarto` ='$id_cuarto' and `new` = '1'";
		if($resulta = mysql_query($comprueba_pos)) {
					
			$datox = mysql_fetch_array($resulta,MYSQL_ASSOC);
			$new_id = $datox['id'];
			$ruta = $datox['ruta'];
			
			echo "<img id='$new_id' onmouseup='guardar_posicion(this.title, this.id, this.style.left, this.style.top);return false;'
			style='position: absolute; cursor: move; border: 0px none; height: 30%; z-index: 0; left:0; top: 0px;'
				 src='$ruta'></a>
				 <script> $(function() { $( '#$new_id' ).draggable({ containment: '#espacio_room' }); });</script>";
			
		} else {
		
		}
			} else {
			    echo "Error updating record: " . mysql_error($link);
			}
		
		
?>