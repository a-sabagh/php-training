<?php

function rng_random_string(){
	$characters = "QWERTYUIOPQASDFGHJKLZXCVBNM";
	$characters .= "qwertyuiopasdfghjklzxcvbnm";
	// $characters .= "1234567890";
	$characters_length = strlen($characters);
	$random_string = '';
	for ($i = 0; $i < 15; $i++) {
		$random_string .= $characters[rand(0, $characters_length - 1)];
	}
	return $random_string;
}

function rng_generate_hash() {
	$random_str = rng_random_string();
	$random_str = substr_replace($random_str, "a", 3, 1);
	$random_str = substr_replace($random_str, "o", 7, 1);
	$random_str = substr_replace($random_str, "d", 11, 1);
	return $random_str;
}

function rng_verify_hash($hash) {
	if (substr($hash, 3, 1) == "a" and substr($hash, 7, 1) == "o" and substr($hash, 11, 1) == "d") {
		return TRUE;
	}else{
		return FALSE;
	}
}

$string = rng_generate_hash();
echo $string . "<br>";
if(rng_verify_hash($string)){
	echo "verification OK";
}else{
	echo "verification Fail";
}
