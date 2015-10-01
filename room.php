<!DOCTYPE php>
<html xmlns="http://www.w3.org/1999/xhtml" class="v6 " lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF8" />

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

<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="scripts/script.js"></script>

</head>
<body class="body_room">
<div class="logo_room">

<div style = "height=60px; width=30%;" align="right" class="Estilo10"><br><?php include("top.php"); ?></div></div>
<div id="espacio_room" class="espacio_room" >
	 
	 <div id="newx" style="height: 510px; width: 1000px; position: absolute"><input type="button" id="<?php echo $id_userx; ?>2" onclick="nuevo_elemento(this.id,this.value);" value="objetos/armario.png" />
	 	<input id="<?php echo $id_userx; ?>1"  type="button" onclick="nuevo_elemento(this.id,this.value);return false;" value="objetos/cama-1.png" /></div>
	<?php
	
	while ($dato_objeto = mysql_fetch_assoc($sql_objetos)) {
	
			$left = $dato_objeto['left'];
			$top = $dato_objeto['top'];
			$objeto1 = $dato_objeto['ruta'];
			$id_objeto = $dato_objeto['id'];
			$ruta_imagen= $dato_objeto['ruta'];
			
			echo '<div><img id="'. $id_objeto .'" onmouseup="guardar_posicion(this.title, this.id, this.style.left, this.style.top);return false;" style="cursor: move; border: 0px none; height: 30%; z-index: 0; left:
			'.$left.'; top: '.$top.';" src="'.$ruta_imagen.'"></a></div>
			<script>
			$(function() {
				 $( "#'.$id_objeto.'" ).draggable({ containment: "#espacio_room" }); });
				 </script>' ;
			
	}
	 
	?>
	
	<!--  
	Resultado: <span id="resultado">0</span>
	
		Convertir la siguiente línea en popup con lightbox avisando del guardado de datos 
		Resultado: <span id="resultado">0</span>
		
		para crear los nuevos items para el usuario, el id será el resultado del id del usuario
		más el id del producto. Así, si el id del usuario es 3 y el id del objeto es 35, entonces el id del 
		objeto para dicho usuairio será el 335.
		
		Recordar que los objetos tienen su id asignado manualmente.
		 -->
	
</div>
<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>

</body>
</html>