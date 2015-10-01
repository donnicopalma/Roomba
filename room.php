<meta name="description" content="" />
<meta name="keywords"    content="" />
<?php
require_once ("control/config.php");

session_start();
if(isset($_SESSION['user_room'])) {
	// Se almacenan datos de usuario en array $datos.
	// La selección de otros datos será en base al uso del campo ID 
	$user = $_SESSION["user_room"];
	$sql_data = mysql_query("SELECT * FROM user WHERE mail = '$user'");
	$dato = mysql_fetch_array($sql_data);
	$id_userx = $dato['ID'];
	
	$this_page = "<a class='Estilo10' href='home.php'>Ir al Home</a>";
	$sql_objetos = mysql_query("SELECT * FROM objeto WHERE id_cuarto = (select id from cuarto where id_user = '$id_userx')");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="scripts/script.js"></script>

</head>
<body class="body_room">
<div class="logo_room">

<div style = "height=60px; width=30%;" align="right" class="Estilo10"><br><?php include("top.php"); ?></div></div>
<div class="espacio_room" >
	<div class="caja_room">
	<?php
	
	 while ($dato_objeto = mysql_fetch_assoc($sql_objetos)) {
	
			$left = $dato_objeto['left'];
			$top = $dato_objeto['top'];
			$objeto1 = $dato_objeto['ruta'];
			$id_objeto = $dato_objeto['id'];
			$ruta_imagen= $dato_objeto['ruta'];
			
			echo '<div><img id="'. $id_objeto .'" onmouseup="guardar_posicion(this.id, this.style.left, this.style.top);return false;" style="cursor: move; border: 0px none; height: 30%; z-index: 0; left:
			'.$left.'; top: '.$top.';" src="'.$ruta_imagen.'"></a></div>
			<script>
			$(function() {
				 $( "#'.$id_objeto.'" ).draggable({ containment: "window" }); });
				 </script>' ;
			
	}
	 
	?>
	
	<!--  
		Convertir la siguiente línea en popup con lightbox avisando del guardado de datos 
		Resultado: <span id="resultado">0</span>
		 -->
	
	</div>
</div>
<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>

</body>
</html>