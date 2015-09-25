<?php
include('config.php');
if(isset($_SESSION["logeado"])){ 
header ("Location: inicio.php");
}else{
?>		<form name="form1" method="post" action="entrar.php"><br>
<span style="color:#000; font-size:12px;">Usuario</span><br>
   <input name="username" type="text" id="username"><br><br>
<span style="color:#000; font-size:12px;">Contrasenia</span><br>
    <input name="password" type="password" id="password"><br><br>
    <input type="checkbox" name="recordar" id="recordar">
<span style="color:#000; font-size:12px;">Recordar</span>
    <br><br>
     <input type="submit" name="Submit" value="Entrar"></form>
     <?php } ?>