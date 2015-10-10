<!DOCTYPE php>
<html xmlns="http://www.w3.org/1999/xhtml" class="v6 " lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF8" />

<?php
require_once ("control/config.php");

session_start();
if(isset($_SESSION['user_room'])) {
	// Se almacenan datos de usuario en array $datos.
	// La selección de otros datos será en base al uso del campo ID 
	$user = $_SESSION["user_room"];
	$sql_data = mysql_query("SELECT * FROM user WHERE mail = '$user'");
	$dato = mysql_fetch_array($sql_data);
	$id_userx = $dato['ID'];
	
	$this_page = "<a class='Estilo10' href='home.php'>Ir al Home</a>";
	$sql_objetos = mysql_query("SELECT * FROM objeto WHERE id_cuarto = (select id from cuarto where id_user = '$id_userx')");
?>

<title>Roomba | <?php echo $dato['nombre'] . " " . $dato['apellidos']; ?></title>

<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="scripts/script.js"></script>

<script>
//sube_z sube el z-index del objeto al que se hace click
	function sube_z(id_obj) {
		var z_in = document.getElementById(id_obj).style.zIndex;
		if(z_in<4){
			var z_new = parseInt(z_in)+parseInt('1');
		    document.getElementById(id_obj).style.zIndex = z_new;
	    } else {
	    	alert ("No puedes subir más este objeto");
	    	
	    }  
	}
	function baja_z(id_obj) {
		var z_in = document.getElementById(id_obj).style.zIndex;
		if(z_in>0){
			var z_new = parseInt(z_in)-parseInt('1');
		    document.getElementById(id_obj).style.zIndex = z_new;
	    } else {
	    	alert ("No puedes bajar más este objeto");
	    	
	    }  
	}
	
	function baja_z(id_obj) {
		var z_in = document.getElementById(id_obj).style.zIndex;
		if(z_in>0){
			var z_new = parseInt(z_in)-parseInt('1');
		    document.getElementById(id_obj).style.zIndex = z_new;
	    } else {
	    	alert ("No puedes bajar más este objeto");
	    	
	    }  
	}
	
	function zoom_in(id_obj) {
		var z_inw = document.getElementById(id_obj).style.width;
			var new_w = parseInt(z_inw)+parseInt('5');
			var new_w1 = new_w+"%";
			
		var z_inh = document.getElementById(id_obj).style.height;
			var new_h = parseInt(z_inh)+parseInt('5');
			var new_h1 = new_h+"%";
		    document.getElementById(id_obj).style.width = new_w1;
		    document.getElementById(id_obj).style.height = new_h1;
	}  
	
	function zoom_out(id_obj) {
		var z_in = document.getElementById(id_obj).style.width;
			var new_w = parseInt(z_in)-parseInt('15');
		    document.getElementById(id_obj).style.width = new_w;
		    document.getElementById(id_obj).style.height = new_h;
	}

</script>


</head>
<body class="body_room">
<div class="logo_room">

<div style = "height=60px; width=30%;" align="right" class="Estilo10"><br><?php include("top.php"); ?></div></div>
<div id="espacio_room" class="espacio_room" >
	 
	 <div id="newx" style="height: 510px; width: 1000px; position: absolute;">
	 	<input type="button" id="<?php echo $id_userx; ?>" onclick="nuevo_elemento(this.id,this.value);" value="objetos/armario.png" />
	 	<input id="<?php echo $id_userx; ?>" type="button" onclick="nuevo_elemento(this.id,this.value);return false;" value="objetos/cama-1.png" /></div>
	<?php
	//ciclo que carga los datos de los objeto y los imprime a través de un echo
	while ($dato_objeto = mysql_fetch_assoc($sql_objetos)) {
	
			$left = $dato_objeto['left'];
			$top = $dato_objeto['top'];
			$objeto1 = $dato_objeto['ruta'];
			$id_objeto = $dato_objeto['id'];
			$ruta_imagen= $dato_objeto['ruta'];
			
			//Div que recibe los datos extraidos y los coloca en pnatalla según su ubicación left top.
			//el script posterior convierte al div en draggable
			echo '<div id="'. $id_objeto .'" class="objeto" onmouseup="guardar_posicion(this.title, this.id, this.style.left, this.style.top);return false;" style="z-index: 0; left:'.$left.'; top: '.$top.'; height: 70%; width: 70%; background-image: url('.$ruta_imagen.');">
			<img id="menu_objeto" src="img/flecha_arriba.png" onmouseup="sube_z('. $id_objeto .');" style="z-index:5; cursor: auto;"></br>
			<img id="menu_objeto" src="img/flecha_abajo.png" onmouseup="baja_z('. $id_objeto .');" style="z-index:5; cursor: auto;"></br>
			<img id="menu_objeto" src="img/zoom_in.png" onmousedown="zoom_in('. $id_objeto .');" style="z-index:5; cursor: auto;"></br>
			<img id="menu_objeto" src="img/zoom_out.png" onmousedown="zoom_out('. $id_objeto .');" style="z-index:5; cursor: auto;"></br>
			</div>
				<script>
				$(function() {
					 $( "#'.$id_objeto.'" ).draggable({ containment: "#espacio_room" }); });
					 </script>' ;
	}
	 
	?>
	<div id="nuevo_elemento"></div>
	<!--  
	Resultado: 
	
		Convertir la siguiente línea en popup con lightbox avisando del guardado de datos 
		Resultado: <span id="resultado">0</span>
		
		para crear los nuevos items para el usuario, el id será el resultado del id del usuario
		más el id del producto. Así, si el id del usuario es 3 y el id del objeto es 35, entonces el id del 
		objeto para dicho usuairio será el 335.
		
		Recordar que los objetos tienen su id asignado manualmente.
		 -->
	
</div>
<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>

</body>
</html>