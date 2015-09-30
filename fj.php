<!DOCTYPE html>
<html>
	<head>
	
	<script type="text/javascript">
function reply_click(clicked_id)
{
    alert(clicked_id);
}
</script>

	</head>

	<body>

<?php $mivarPhp=
      '<script type="text/javascript">;
     var mivarJS="Asignado en JS";
     document.writeln (mivarJS);
     </script>'; 
     echo $mivarPhp."\n<br>";
     echo '<br>Comprobar si es \\$mivarPhp igual que "Asigando en JS"<br>';
     if ($mivarPhp == "Asignado en JS")
          echo "Es igual.<br>";
     else
          echo "Es distinto.<br>";
	 echo $mivarPhp;

?>
	</body>

</html>