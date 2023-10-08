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

function update($id,$data){
	$xml = new DomDocument;
	$xml->load("user.xml");
	$dolphine = $xml->getElementsByTagName('dolphine')->item(0);
	$user = $xml->getElementById($id);
	foreach($data as $tagname => $text_content){
		$user->getElementsByTagName($tagname)->item(0)->textContent = $text_content;
	}
	$xml->save('user.xml');
}

function find($id){
	$data = [];
	$xml = new DomDocument;
	$xml->load("user.xml");
	$dolphine = $xml->getElementsByTagName('dolphine')->item(0);
	$user = $xml->getElementById($id);
	if(empty($user)){
		return;
	}
	foreach($user->childNodes as $item){
		if(false == $item instanceof \DOMElement){
			continue;
		}
		$data[$item->nodeName] = $item->nodeValue;
	}
	return $data;
}

