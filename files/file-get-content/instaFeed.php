<?php
//returns a big old hunk of JSON from a non-private IG account page.
function instaFeed($username) {
	$insta_source = file_get_contents('http://instagram.com/'.$username);
	$shards = explode('window._sharedData = ', $insta_source);
	$insta_json = explode(';</script>', $shards[1]); 
	$insta_array = json_decode($insta_json[0], TRUE);
	return $insta_array;
}
//Supply a username
$my_account = 'abolfazlsabagh'; 
//Do the deed
$results_array = instaFeed($my_account);
echo "<pre>";
var_dump($results_array);
echo "</pre>";
