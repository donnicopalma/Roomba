<?php
include ("control/config.php");
?>
<?php
session_start();
if(isset($_SESSION['user_room'])) {
	 
$user = $_SESSION["user_room"];
$sql_data = mysql_query("SELECT * FROM user WHERE mail = '$user'");
$dato = mysql_fetch_array($sql_data);

echo $dato['apellidos'];
echo  '</br>';
echo $dato['mail'];echo  '</br>';
echo $dato['sexo'];echo  '</br>';
echo $dato['fecha_nac'];echo  '</br>';
?>
			sadasd
			
		<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>
	