<?php
if(isset($_SESSION['user_room'])) {
	echo 'Bienvenido <span class="Estilo10"><b>' .$_SESSION["nombre"]. '</b></span><br />';
	echo '<a class="Estilo10" href="ayuda.php">Ayuda</a>&nbsp;|&nbsp;'.$other_page.'&nbsp;|&nbsp;'.$other_page2.'&nbsp;|&nbsp;<a class="Estilo10" href="logout.php">Cerrar Sesi&oacute;n</a>';
} else {
	echo '<br /><a class="Estilo10" href="ayuda.php">Ayuda</a>&nbsp;|&nbsp;<a class="Estilo10" href="login.php">Iniciar sesi&oacute;n</a>';
}

?>