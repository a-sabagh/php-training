<?php
function rng_random_string(){
	$characters = "QWERTYUIOPQASDFGHJKLZXCVBNM";
	$characters .= "qwertyuiopasdfghjklzxcvbnm";
	$characters .= "1234567890";
	$characters_length = strlen($characters);
	$random_string = '';
	for($i=0;$i<7;$i++){
		$random_string .= $characters[rand(0,$characters_length -1 )];
	}
	return $random_string;
}
echo rng_random_string();