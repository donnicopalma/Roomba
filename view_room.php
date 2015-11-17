<!DOCTYPE php>
<html xmlns="http://www.w3.org/1999/xhtml" class="v6 " lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF8" />

<?php
require_once ("control/config.php");
include_once("room_archives/gallery.php");

session_start();
if(isset($_SESSION['user_room'])) {
	// Se almacenan datos de usuario en array $datos.
	// La selección de otros datos será en base al uso del campo ID 
	$user = $_SESSION["user_room"];
	$sql_data = mysql_query("SELECT * FROM user WHERE mail = '$user'");
	$dato = mysql_fetch_array($sql_data);
	$id_userx = $dato['ID'];
	
	$other_page = "<a class='Estilo10' href='home.php'>Ir al Home</a>";
	$other_page2 = "<a class='Estilo10' href='edit_room.php'>Editar mi roomba</a>";
	$sql_objetos = mysql_query("SELECT * FROM objeto WHERE id_cuarto = (select id from cuarto where id_user = '$id_userx')");
?>

<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="estilos/layout.css" type="text/css" media="screen">
<link rel="stylesheet" href="estilos/menu_room.css" type="text/css" media="screen">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="scripts/script.js"></script>

<script src="scripts/filesaver.js" type="text/javascript"></script>
<script src="scripts/html2canvas.js" type="text/javascript"></script>   


</head>
<body class="body_room">
<div class="logo_room">
<div style = "height=60px; width=30%;" align="right" class="Estilo10"><br><?php include("top.php"); ?></div></div>

<div id="espacio_room" class="espacio_room" >
	 <img src="objetos/pieza.jpg" class="espacio_room">
	<?php
	//ciclo que carga los datos de los objeto y los imprime a través de un echo
	while ($dato_objeto = mysql_fetch_assoc($sql_objetos)) {
	
			$alto = $dato_objeto['alto'];
			$ancho = $dato_objeto['ancho'];
			$left = $dato_objeto['left'];
			$top = $dato_objeto['top'];
			$objeto1 = $dato_objeto['ruta'];
			$id_objeto = $dato_objeto['id'];
			$ruta_imagen= $dato_objeto['ruta'];
			$zindex = $dato_objeto['z-index'];
			
			//Div que recibe los datos extraidos y los coloca en pnatalla según su ubicación left top.
			//el script posterior convierte al div en draggable
			echo '<div class="objeto" id="'. $id_objeto .'" style="z-index: '. $zindex .'; left:'.$left.'; top: '.$top.'; cursor: auto !important">
			<img src="'.$ruta_imagen.'" style="max-height: '. $alto .'; max-width: '. $ancho .';"></br>
			</div>' ;
	}
	 
	?>
	<script type="text/javascript">
     window.onload = captura('<?php echo $user ?>');
    </script>
	
<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>

</body>
</html>