<?php
// Conectando, seleccionando la base de datos
$hostdb = "localhost";
$usernamedb = "root";
$passdb = "";
$namedb = "roomb_users";

$link = mysql_connect($hostdb, $usernamedb, $passdb);
$link or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db($namedb) or die('No se pudo seleccionar la base de datos');



//$query = 'SELECT * FROM user';
//$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());



/*
// Realizar una consulta MySQL
 $query = "SELECT mail FROM user WHERE mail = 'nico.palma@gmail.com'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
//mysql_free_result($result);

// Cerrar la conexión
//mysql_close($link);
 * 
 */
?>
