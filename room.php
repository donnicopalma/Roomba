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
	
	$sql_objetos = mysql_query("SELECT * FROM objeto WHERE id_cuarto = '1'");
	$dato_objeto = mysql_fetch_array($sql_objetos);
	$dato_objetox = mysql_fetch_array($sql_objetos,MYSQL_BOTH);
	
	
	for ($i = '0';$i < $dato_objetox[0]; $i++){
		
	$sql_objetosx = mysql_query("SELECT * FROM objeto WHERE id_cuarto = '1'");
	$dato_objetox = mysql_fetch_array($sql_objetosx);
	echo $dato_objetox['id'];
	$dato_objetox[]++;
	}
	
	$left = $dato_objeto['left'];
	$top = $dato_objeto['top'];
	$objeto1 = $dato_objeto['ruta'];
	$id_objeto = $dato_objeto['id'];	
$imagenes = array(
'#' => $objeto1
);

/* Puedes meter las imagenes que quieras en el arreglo, y luego... */


/* Los corchetes son llaves ya me voy ojala te sirva */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>

<!-- Prototype y Scriptaculous-->
<script src='http://www.google.com/jsapi'></script>
<script>
google.load("prototype","1.7.0.0");
google.load("scriptaculous", "1.9.0");
</script>
<!-- Prototype y Scriptaculous-->

</head>
<body>
<?php
foreach($imagenes as $link => $rutaImagen){
echo '<a href="'.$link.'"><img id="icono'. $id_objeto .'" style="cursor: move; border: 0px none; height: 30%; width: 30%; position: relative; z-index: 0; left:
'.$left.';px; top: '.$top.';px;" src="'.$rutaImagen.'"></a>  <script type="text/javascript">new Draggable("icono'. $id_objeto .'");</script>' ; 
};


?>
<script type="text/javascript">new Draggable('icono"<?php $id_objeto; ?>"');</script>

<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>

</body>
</html>