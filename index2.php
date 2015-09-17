<?php

session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: index.php'); 
  exit();
}

 ?>
  <h1>BIENVENIDO</h1>
  <a href="logout.php">Cerrar Sesión</a>
