<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

function generate_options($from,$to,$callback=false)
{
	$reverse=false;
	
	if($from>$to)
	{
		$tmp=$from;
		$from=$to;
		$to=$tmp;
		
		$reverse=true;
	}
	
	$return_string=array();
	for($i=$from;$i<=$to;$i++)
	{
		$return_string[]='
		<option value="'.$i.'">'.($callback?$callback($i):$i).'</option>
		';
	}
	
	if($reverse)
	{
		$return_string=array_reverse($return_string);
	}
	
	
	return join('',$return_string);
}


function callback_month($month)
{
	return date('M',mktime(0,0,0,$month,1));
}

function captura_cuarto(){
	
	$img = $_POST['datax'];
	
	$data = str_replace('data:image/png;base64,', '', $img);
	
	
	if ($data !== false) {
		file_put_contents('../usuarios/image.png', base64_decode($data));
		} else {
		    echo 'Un error ocurrio al convertir la imagen.';
	}	
}
?>