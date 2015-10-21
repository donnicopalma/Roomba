<?php
class gallery {
	
	var $files = array();
	var $path;
	
	function loadFolder($path){
		
		$this->path = $path;
		
		//---Guardar en un arreglo todos los archivos en el directorio	
		$folder = opendir($this->path);
			
		while ($fil = readdir($folder)) {
			
			//---Si no es un directorio
			if(!is_dir($fil)){
				
				$arr = explode('.', $fil);
				
				if(count($arr) > 1){
					
					//---Ir guardando los nombres en un arreglo
					$this->files[] = $fil;
					
				}
				
			}
			
		}
		
		//---Cerrar el directorio
		closedir($folder);
		
		//---Ordenar alfabeticamente el arreglo
		sort($this->files);
	
	}
	
	function show($area = 500, $width = 100, $space = 10){
	
		//---Crear la galería con los nombres de todos los archivos
		$total = count($this->files);
		$cont = 0;
		$ancho = 70*$total;
		echo '<div name="xx" style="width:'.$area.'px; overflow:auto;"> <div style="width:'.$ancho.'px;">';
		
			//---Situar los thumbnails
			for($i = 0; $i < $total; $i++){		
				
				echo '<div style="width:'.$width.'px; float:left; padding-right:'.$space.'px; padding-bottom:'.$space.'px;"><a href="'.$this->path.'/'.$this->files[$i].'" rel="lightbox"><img src="show_thumb.php?src='.$this->path.'/'.$this->files[$i].'&width='.$width.'" width="'.$width.'" height="'.$width.'" border="0"></img></a></div>';
				
			}
			
			?>
        
			<script language="javascript">
    
                $(document).ready(function(){
                   
                    $("a[rel = 'lightbox']").lightBox();					   
                                           
                });
    
            </script>
        
       		<?php
		
		echo '</div></div>';
	
	}

}
?>