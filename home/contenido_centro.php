<table width="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>
  	<div class="desplegable_home">
  	
      	<div onclick="sube_baja('cuadro1')">
      		<div class="cont_flecha" ><img alt="" id="bot" src="home/fabajo.gif">  Mi Roomba</div></div>
      	<div class="cont_desplegable_home" id="cuadro1" >
	      	
				<?php
	      		echo '<img src="usuarios/'.$dato['mail'].'/room.png" style="width: 419px;"/>';
	      		?>
      	</div>
  	</div>
  	<div class="desplegable_home">
  	
      	<div onclick="sube_baja('cuadro2')">
      		<div class="cont_flecha" ><img alt="" id="bot" src="home/fabajo.gif">  Mis Roombas favoritos</div></div>
      	<div class="cont_desplegable_home" id="cuadro2" >
	      	</br> 
	      	
	      	<?php
	//ciclo que carga los datos de los objetos y los imprime a través de un echo
	while ($dato_objeto = mysql_fetch_assoc($sql_amigoa)) {
		
			$nombrea = $dato_objeto['nombre'];
			$apellidosa = $dato_objeto['apellidos'];
			$maila = $dato_objeto['mail'];
			//Div que recibe los datos extraidos y los coloca en pnatalla según su ubicación left top.
			//el script posterior convierte al div en draggable
			echo '<a href="room_amigo.php?mail='.$maila.'"><div> '.$nombrea.' '.$apellidosa.'</div><div><img src="usuarios/'.$maila.'/room.png" width="130" /></div></a></br>' ;
	}
	 
	?>
				
      	</div>
  	</div>
  	<div class="desplegable_home">
  	
      	<div onclick="sube_baja('cuadro3')">
      		<div class="cont_flecha" ><img alt="" id="bot" src="home/fabajo.gif"></div></div>
      	<div class="cont_desplegable_home" id="cuadro3" >
	      	</br> 
	      	
      	</div>
  	</div>

  </tr>
</table>