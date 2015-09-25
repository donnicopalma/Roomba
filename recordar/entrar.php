<?
// Configura los datos de tu cuenta
include('config.php');

// Conectar a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname) or die('No se puede seleccionar la base de datos');

if ($_POST['username']) {
//Comprobacion del envio del nombre de usuario y password
$username=htmlentities($_POST['username']);
$password=$_POST['password'];
if ($password==NULL) {
echo "No a introducido una contrasenia";
exit();
}else{
$query = mysql_query("SELECT mail,contrasena FROM usuarios WHERE mail = '$username'") or die(mysql_error());
$data = mysql_fetch_array($query);
if($data['contrasena'] != $password) {
echo "No a introducido una contrasenia correcta";
exit();
}else{
$query = mysql_query("SELECT username,contrasena FROM usuarios WHERE username = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$username2 = $row['username'];
$_SESSION["s_username"] = $row['username'];
$_SESSION["logeado"];

/* Si aceptamos recordar los datos */
if($_POST['recordar']){

						if ($HTTP_X_FORWARDED_FOR == "")
					{
						$ip = getenv(REMOTE_ADDR);
					}
					else
					{
						$ip = getenv(HTTP_X_FORWARDED_FOR);
					}
	$id_extreme = md5(uniqid(rand(), true));
	$id_extreme2 = $username2."%".$id_extreme."%".$ip;
	setcookie('id_extreme', $id_extreme2, time()+7776000,'/');
	$query = mysql_query("UPDATE usuarios SET id_extreme='".$id_extreme."' WHERE username='".$username2."'") or die(mysql_error());
}

header ("Location: inicio.php");
}
}
}
?> 