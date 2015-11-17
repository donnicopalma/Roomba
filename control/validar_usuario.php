<?php
include ("config.php");
/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST
**y los almacenamos en variables.*/

$usuario = $_POST["username"] . $_GET["username"];   
$password = $_POST["password"] . $_GET["password"];
 
/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$sql_r = mysql_query("SELECT nombre,contrasena,mail FROM user WHERE mail = '$usuario'");
$dato = mysql_fetch_array($sql_r);
//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($dato)
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($dato["contrasena"] == $password)
 {
  //Creamos sesión
  session_start();  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['user_room'] = $usuario;
  $_SESSION["nombre"]= $dato["nombre"];
  $dato = mysql_fetch_array($sql);
  
   //Redireccionamos a la pagina: index.php
  header("Location: ../home.php");  
 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  ?>
   <script languaje="javascript">
    alert("Contraseña Incorrecta");
    location.href = "../index.php";
   </script>
  <?php
             
 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "../index.php";
 </script>
<?php
         
}
 
//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($sql_r);
 
/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>