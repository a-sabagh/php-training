<?php 
function untrailingslashes($string){
	return rtrim( $string, '/\\' );
}
function trailingslashes($string){
	return untrailingslashes($string) . "/";
}
$path = "localhost/gnutec/images/";

echo untrailingslashes($path);