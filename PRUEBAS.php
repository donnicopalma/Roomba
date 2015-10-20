<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>archivos</title> 
</head> 

<body> 
<?php  
// para leer el directorio 
$ruta = "objetos/";  
$filehandle = opendir($ruta);  
while ($file = readdir($filehandle)) { 
    if ($file != "." && $file != ".." ) { 
        $arch=$file; 
        $archi=$arch.'*'.$archi; 
    } 
} 

closedir($filehandle);  



  
// paginando 
$archivosfile=explode("*", $archi); 
$currentpage = $_SERVER['PHP_SELF']; // pagina en la que se encuentra 
$total=(count($archivosfile)-1); 
$maxRows_Blogdenotas = 10;  // cantidad maxima de archivos a mostrar por pagina 
$pageNum_Blogdenotas = 0; 

if (isset($_GET['pag'])) { 
  $pageNum_Blogdenotas = intval($_GET['pag']); 
} 

$startRow_Blogdenotas = $pageNum_Blogdenotas * $maxRows_Blogdenotas; 

if (isset($_GET['pag'])) { 
  $pageNum_Blogdenotas = intval($_GET['pag']); 
} 

$startRow_Blogdenotas = $pageNum_Blogdenotas * $maxRows_Blogdenotas; 
$totalRows_Blogdenotas = $total; 
$totalPages_Blogdenotas = ceil($totalRows_Blogdenotas/$maxRows_Blogdenotas)-1; 
$archivos = array_slice($archivosfile, $startRow_Blogdenotas, $maxRows_Blogdenotas); 

// paginando    

?> 
Total Archivos:&nbsp;<?php echo $total;  ?><br /><br /> 
<table border="0"> 
                    <tr> 
                      <td><?php if ($pageNum_Blogdenotas > 0) { // Show if not first page ?> 
                            <a href="<?php echo $currentpage; ?>?pag=0">Primero</a> 
                            <?php }else{ // Show if not first page ?> 
                            <span class="style1">Primero</span>                            <?php } ?>                      </td> 
                      <td><?php if ($pageNum_Blogdenotas > 0) { // Show if not first page ?> 
                            <a href="<?php echo $currentpage; ?>?pag=<?php echo htmlentities($_GET['pag']-1); ?>">Anterior</a> 
                            <?php }else{ // Show if not first page ?> 
                            <span class="style1">Anterior</span>                            <?php } ?>                      </td> 
                      <td><?php if ($pageNum_Blogdenotas < $totalPages_Blogdenotas) { // Show if not last page ?> 
                            <a href="<?php echo $currentpage; ?>?pag=<?php echo htmlentities($_GET['pag']+1); ?>">Siguiente</a> 
                            <?php }else{ // Show if not last page ?> 
                            <span class="style1">Siguiente</span>                            <?php } ?>                      </td> 
                      <td><?php if ($pageNum_Blogdenotas < $totalPages_Blogdenotas) { // Show if not last page ?> 
                            <a href="<?php echo $currentpage; ?>?pag=<?php echo $totalPages_Blogdenotas ?>">Ultimo</a> 
                            <?php }else{ // Show if not last page ?> 
                            <span class="style1">Ultimo</span>                            <?php } ?>                      </td> 
                    </tr> 
                  </table> 
<div>                  Mostrando <?php echo ($startRow_Blogdenotas + 1) ?> a <?php echo min($startRow_Blogdenotas + $maxRows_Blogdenotas, $totalRows_Blogdenotas) ?> de <?php echo $totalRows_Blogdenotas ?></div><br /><br /> 

<?php 
foreach ($archivos as $archivo) {  
echo '<a href="'.$ruta.$archivo.'"><img src="'.$ruta.$archivo.'" style="width:200px;" /></a>'; } 
?> 
</body> 
</html>