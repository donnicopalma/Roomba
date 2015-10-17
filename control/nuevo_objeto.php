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
			
			echo '<div class="objeto ui-widget-resizable" id="'. $new_id .'" onmouseup="guardar_posicion(this.id, this.style.left, this.style.top, this.style.height, this.style.width, this.style.zIndex);return false;" style="z-index: 0; left: 0; top: 0; height: 170px; width: 90px; background-image: url('.$ruta.');">
				<img id="menu_objeto" src="img/flecha_arriba.png" onmouseup="sube_z('. $new_id .');" style="z-index:5; cursor: auto;"></br>
				<img id="menu_objeto" src="img/flecha_abajo.png" onmouseup="baja_z('. $new_id .');" style="z-index:5; cursor: auto;"></br>
				<img id="menu_objeto" src="img/delete.png" onmouseup="elimina_elemento('. $new_id .');" style="z-index:5; cursor: auto;"></br>
				</div>
				<script>
					$(function() {
						$( "#'.$new_id.'" ).draggable({autoscroll: false, containment: "#espacio_room" }).resizable();; 
					});
				</script>';
				
			
		} else {
		
		}
			} else {
			    echo "Error updating record: " . mysql_error($link);
			}
		
		
?>