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
		
	function show(){
	
		//---Crear la galería con los nombres de todos los archivos
		$total = count($this->files);
		$cont = 0;
		
			//---Situar los thumbnails
			for($i = 0; $i < $total; $i++){		
				
				echo $this->path.'/'.$this->files[$i];
				
			}
			
	}

}
?>