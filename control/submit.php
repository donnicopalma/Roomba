<?php
include ("config.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sex = $_POST['sex'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];


//Valida si los campos nombre, apellidos, correo y password fueron llenados 

if(empty($fname) || empty($lname) || empty($email) || empty($pass))
{
	die(msg(0,"Todos los campos son requeridos"));
}


// Validador de seleccion de sexo

if(!(int)$sex)
{
	die(msg(0,"Debes seleccionar tu sexo"));
}


// Validador de fecha de nacimiento seleccionada

if(!(int)$dia || !(int)$mes || !(int)$ano)
{
	die(msg(0,"Debes seleccionar tu fecha de nacimiento"));
}


// Validador de correo

if(!(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $_POST['email'])))
	die(msg(0,"Debes ingresar un e-mail v&aacute;lido"));


	// Valida si correo existe
$resultd = mysql_query("SELECT mail FROM user WHERE mail = '$email'");

if(mysql_fetch_array($resultd,MYSQL_ASSOC))
{
	die(msg(0,"El e-mail ingresado ya está registrado"));
}

// Colocar las validaciones contra la base de datos luego de esta fila

$fecha = $ano."-".$mes."-".$dia;

$sql = "INSERT INTO user (nombre, apellidos, contrasena, mail, sexo, fecha_nac, fecha_registro, dinero) VALUES ('$fname', '$lname', '$pass', '$email', '$sex', '$fecha', SYSDATE(), '99999')";
$result = mysql_query($sql);

$sql_r = mysql_query("SELECT id FROM user WHERE mail = '$email'");
$dato = mysql_fetch_array($sql_r);

$sql_a = ("INSERT INTO cuarto (id_user, contador_visitas, alto, largo, ancho, luces, color_luces, color) VALUES ('". $dato['id'] ."', '123', '123', '123', '123', '123', '123', '123');");
$resulta= mysql_query($sql_a);

mkdir("../usuarios/".$email);

//Copia imagen de usuario y cuarto por defecto a carpetas.
copy("../img/default/room.png","../usuarios/".$email."/room.png");
copy("../img/default/new.png","../usuarios/".$email."/new.png");

// Envía a página de registro exitoso
//echo msg(1,"registered.html");

echo msg(1,'control/validar_usuario.php?username='.$email.'&password='.$pass);
// Envía mensaje de error según las validaciones realizadas más arriba
function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}

// Cierra la conexión con la base de datos
mysql_close($link);
?>
