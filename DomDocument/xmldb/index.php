<?php

$data = [
	'id' => time(),
	'username' => 'a-maher',
	'display_name' => 'Arash Maher',
	'password' => "7U2KkARgO",
	'email' => 'info@amaher.com',
];

function insert($data){
	$xml = new DomDocument;
	$xml->load("user.xml");
	$dolphine = $xml->getElementsByTagName('dolphine')->item(0);
	$user = $xml->createElement("user");
	$user->setAttribute('xml:id','a-maher');
	foreach($data as $tagname => $text){
		$user->appendChild(
			$xml->createElement($tagname,$text)
		);
	}
	$dolphine->appendChild($user);
	$xml->save('user.xml');

}
