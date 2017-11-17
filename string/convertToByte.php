<?php 
function convertToByte($string){
	$output = (int)$string;
	$unit = strtolower($string[(strlen($string)-1)-1]);
	$computer_units = array("k","m","g");
	if(in_array($unit, $computer_units)){
		switch ($unit) {
			case "g":
			$output *= 1024;
			case "m":
			$output *= 1024;
			case "k":
			$output *= 1024;
		}
		return $output;
	}else{
		return FALSE;
	}
}
echo convertToByte("1KB");
