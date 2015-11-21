<!--ROOMBAS DESTACADOS-->
  <tr>
    <td height="44" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="13" height="23">&nbsp;</td>
              <td width="204">&nbsp;</td>
            </tr>
      <tr>
        <td height="18"></td>
              <td valign="top"><span class="Estilo29">Roombas Destacados</span></td>
            </tr>
      <tr>
        <td height="3"></td>
              <td></td>
            </tr>
      
      
      </table></td>
      </tr>
  
  <tr>
    <td width="7" height="339">&nbsp;</td>
      <td width="165" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
        <div style="max-height:320px; width=170px; overflow:auto;">
		         
<?php
;
			$sql_amigo = mysql_query("SELECT nombre, apellidos, mail FROM user"); 
	//ciclo que carga los datos de los objetos y los imprime a través de un echo
	while ($dato_objeto = mysql_fetch_assoc($sql_amigo)) {
		
			$nombrea = $dato_objeto['nombre'];
			$apellidosa = $dato_objeto['apellidos'];
			$maila = $dato_objeto['mail'];
			//Div que recibe los datos extraidos y los coloca en pnatalla según su ubicación left top.
			//el script posterior convierte al div en draggable
			echo '<a href="room_amigo.php?mail='.$maila.'"><div> '.$nombrea.' '.$apellidosa.'</div><div><img src="usuarios/'.$maila.'/room.png" width="130" /></div></a></br>' ;
	}
	 
	?>
		          
		          </div>
            </tr>
        <tr>
          <td height="20" valign="top"></td>
            </tr>
        <tr>
      </table></td>