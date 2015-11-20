<!DOCTYPE php>

<head>
	<?php
		require_once ("control/config.php");
		
		session_start();
		
		if(isset($_SESSION['user_room'])) {
			// Se almacenan datos de usuario en array $datos.
			// La selección de otros datos será en base al uso del campo ID 
			$user = $_SESSION["user_room"];
			$sql_data = mysql_query("SELECT * FROM user WHERE mail = '$user'");
			$dato = mysql_fetch_array($sql_data);
			$other_page = "<a class='Estilo10' href='view_room.php'>Ver mi Roomba</a>";
			$other_page2 = "<a class='Estilo10' href='edit_room.php'>Editar mi Roomba</a>";
	?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>
<script type="text/javascript" src="scripts/script.js"></script>
<link href="estilos/demo.css" rel="stylesheet" type="text/css" />
<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
 <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
 <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
 

</head>
<body>
<table width="958" border="0" align="center" cellpadding="0" cellspacing="0" class="home">
  <!--DWLayoutTable-->
  <tr>
    <td height="123" colspan="7" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="34" height="13" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="9" height="13" valign="top">
            	<div id="edit_foto" style="display: none;">
              
              <div class="content">
              	
 <script src="scripts/foto_usr.js"></script>
		            <input type="file" id="imagess" name="imagess[]" />
		            <button id="btnSubmit">Subir archivo</button>
		            
		            <div id="response"></div>
		        </div>
              </div></td>
                <td width="25"></td>
            </tr>
          
          
          
          
        </table></td>
          <td width="300"></td>
          <td width="375"></td>
          <td colspan="2" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="214" height="28">&nbsp;</td>
                <td width="35">&nbsp;</td>
              </tr>
            <tr>
              <td height="60" valign="top" class="Estilo10"><?php include("top.php"); ?></td>
                <td></td>
              </tr>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          </table></td>
        </tr>
      <tr>
        <td height="75">&nbsp;</td>
        <td></td>
        <td></td>
      </tr>
      
      <tr>
        <td height="34"></td>
          <td></td>
          <td colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="449" height="34" valign="top"><?php include("bar.php"); ?></td>
              </tr>
            
            
            
          </table></td>
          <td width="175">&nbsp;</td>
        </tr>
      <tr>
        <td height="1"></td>
          <td></td>
          <td></td>
          <td width="74"></td>
          <td></td>
        </tr>
      
      
      
      
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td width="33" height="20">&nbsp;</td>
    <td width="7">&nbsp;</td>
    <td width="120" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="120" height="17"></td>
        </tr>
      <tr>
        <td height="148" align="center" valign="middle">
          <a href="usuarios/<?php echo $user ?>/new.png"><img src= "usuarios/<?php echo $user ?>/new.png" style="max-height: 148px; max-width: 125px;" /></a></td>
        </tr>
      
      
      <tr>
        <td height="15" valign="top" class="sample_popup"><label class="Estilo10" id="pos_right" onclick="abrir_edit_foto()" ><a href="#">Cambiar&nbsp;Fotograf&iacute;a</a></label></td>
        </tr>
      <tr>
        <td height="89">&nbsp;</td>
      </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </table></td>
    <td colspan="2" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="5" height="20"></td>
          <td width="74">&nbsp;</td>
          <td width="54">&nbsp;</td>
          <td width="9"></td>
          <td width="12"></td>
        </tr>
      <tr>
        <td height="21"></td>
          <td colspan="3" valign="top" class="Tarjeta"><?php echo $dato['nombre'] ?>&nbsp;</td>
          <td></td>
        </tr>
      <tr>
        <td height="28"></td>
          <td colspan="3" valign="top">Ranking...</td>
          <td></td>
        </tr>
      <!--DWLayoutTable-->

        <tr>
          <td height="15"></td>
          <td colspan="2" valign="top" class="Tarjeta1"><span class="Estilo4">Ocupacion Roomba:</span></td>
                <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="19"></td>
          <td colspan="3" valign="top" class="Tarjeta2"><span class="Estilo6"></span></td>
              <td></td>
        </tr>
      <tr>
        <td height="8"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td colspan="2" valign="top" class="Tarjeta1"><span class="Estilo4">Antig&uuml;edad:</span></td>
                <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="19"></td>
          <td colspan="3" valign="top" class="Tarjeta2"><span class="Estilo6"><?php echo $dato['fecha_registro'] ?></span></td>
              <td></td>
        </tr>
      <tr>
        <td height="8"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td colspan="2" valign="top" class="Tarjeta1"><span class="Estilo4">Cumplea&ntilde;os:</span></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="19"></td>
          <td colspan="3" valign="top" class="Tarjeta2"><span class="Estilo6"><?php echo $dato['fecha_nac'] ?></span></td>
                <td></td>
        </tr>
      <tr>
        <td height="7"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td colspan="2" valign="top" class="Tarjeta1">Roombares:</td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="19"></td>
          <td colspan="2" valign="top" class="Tarjeta2">$10.000</td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="11"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td valign="top"><span class="Estilo7"><a href="perfil.php">Perfil completo</a></span></td>
                <td></td>
          <td></td>
          <td></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      

      

              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            
            
    </table></td>
  <td width="427">&nbsp;</td>
    <td width="217" rowspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="13" height="20">&nbsp;</td>
          <td width="162">&nbsp;</td>
          <td width="42">&nbsp;</td>
      </tr>
      <tr>
        <td height="245">&nbsp;</td>
          <td colspan="2" valign="top"><?php include("pub.php"); ?></td>
        </tr>
      <tr>
        <td height="383" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
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
                  <td width="165" height="40" valign="top"><img src="home/up.gif" width="165" height="40" /></td>
                    </tr>
                <tr>
                  <td height="240">&nbsp;</td>
                    </tr>
                <tr>
                  <td height="40" valign="top"><img src="home/down.gif" width="165" height="40" /></td>
                    </tr>
                <tr>
                  <td height="19"></td>
                  </tr>
                
                
                
                
                
                
                
                
                
                
                
                
                
              </table></td>
              <td width="45">&nbsp;</td>
          </tr>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          </table></td>
        </tr>
      <tr>
        <td height="18"></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
        <td height="196"></td>
        <td valign="top"><?php include("pub2.php"); ?></td>
          <td></td>
      </tr>
      
      
      
      
      
      
      
      
      

      
      
      
      
      
      
      
      
      
      
      
      
      

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td height="249">&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="3" valign="top">
    <?php include ('contenido_centro.php'); ?>
    </td>
  </tr>
  
  
  
  
  <tr>
    <td height="222">&nbsp;</td>
    <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="principal">
      <!--DWLayoutTable-->
      <tr>
        <td width="32" height="29"></td>
          <td width="228"></td>
        </tr>
      <tr>
        <td height="6" colspan="2" valign="top"><img src="home/spacer.png" alt="" width="200" height="3" /><br />
          <img src="home/spacer.png" alt="" width="200" height="3" /></td>
        </tr>
      
      <!--DWLayoutTable-->
      
      <tr>
        <td height="15"></td>
          <td valign="top">Ir a mi ROOMBA</td>
        </tr>
      
      
      
      
        <tr>
          <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" width="200" height="3" /></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td valign="top"><p>Roombas favoritos</p></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" width="200" height="3" /></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td valign="top">Editar perfil</td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" width="200" height="3" /></td>
        </tr>
      
        
        
        
        
        
      
      
      
      
      
      
        <tr>
          <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td valign="top">Contactos</td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" width="200" height="3" /></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td valign="top">Informaci&oacute;n personal</td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" width="200" height="3" /></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="16"></td>
          <td valign="top">Informaci&oacute;n de ubicaci&oacute;n</td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" alt="" width="200" height="3" /></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td valign="top">Configuracion de cuenta</td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><img src="home/spacer.png" alt="" width="200" height="3" /></td>
        </tr>
      <tr>
        <td height="3"></td>
          <td></td>
        </tr>
      <tr>
        <td height="18"></td>
          <td valign="top">Mensajes recibidos</td>
        </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </table></td>
    <td width="21">&nbsp;</td>
  </tr>
  <tr>
    <td height="343">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td width="133"></td>
    <td></td>
  </tr>
  
  
  
  <tr>
    <td height="29">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  
  
  
  
  
  
  
  
  <tr>
    <td height="90" colspan="7" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="108" height="34"></td>
          <td width="136">&nbsp;</td>
          <td width="300"></td>
          <td width="349" rowspan="2" valign="top"><?php include ('creditos.php')?>            &nbsp;</td>
          <td width="65"></td>
        </tr>
      <tr>
        <td height="15"></td>
        <td valign="top" class="Estilo10">&copy; 2015 Roomba, M.R.</td>
          <td></td>
        <td></td>
      </tr>
      <tr>
        <td height="41">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td></td>
          <td></td>
        </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <!--DWLayoutTable-->
      
      
    </table></td>
  </tr>
  
  
  
  
  
  
  
  
  

  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</table>
<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>

</body>