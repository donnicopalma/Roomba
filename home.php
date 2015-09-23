<?php
require_once ("control/config.php");
?>
<?php
session_start();
if(isset($_SESSION['user_room'])) {
	// Se almacenan datos de usuario en array $datos.
	// La selección de otros datos será en base al uso del campo ID 
	$user = $_SESSION["user_room"];
	$sql_data = mysql_query("SELECT * FROM user WHERE mail = '$user'");
	$dato = mysql_fetch_array($sql_data);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<link href="estilos/demo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("top.php"); ?>



</body>
</html>
<?php
} else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="index.php">reg&iacute;strate</a> o <a href="index.php">logu&eacute;ate</a>';
	
	header('Location: index.php');
}
?>
	