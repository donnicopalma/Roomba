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
		
	function show($width = 200, $space = 10){
	global $id_userx;
		//---Crear la galería con los nombres de todos los archivos
		$total = count($this->files);
		$cont = 0;
		$ancho = 250;
		$area = 70*$total;
		echo '<div name="xx" style="width:'.$ancho.'px;"> <div style="height:'.$area.'px; overflow:auto;">';
		
			//---Situar los thumbnails
			for($i = 0; $i < $total; $i++){			
				$nombre = $this->files[$i];
				echo '<div class="menu_objetos_pieza" id="'.$id_userx.'" onclick="nuevo_elemento(this.id,this.title);" title="'.$this->path.'/'.$nombre.'" style="padding-right:'.$space.'px; padding-bottom:'.$space.'px;"><img src="'.$this->path.'/thumb/'.$nombre.'" width="'.$width.'" height="'.$width.'" border="0"></img> '.$this->files[$i].'</div>';
				
			}
			
		echo '</div></div>';
	
	}

}
?>