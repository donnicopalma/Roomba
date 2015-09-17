<?php 
 //Crear sesi�n
 session_start();
 //Vaciar sesi�n
 $_SESSION = array();
 //Destruir Sesi�n
 session_destroy();
 //Redireccionar a login.php
 header("location: index.php");
?>