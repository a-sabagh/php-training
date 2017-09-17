<?php
$xml = new DomDocument();
$xml->load("contacts.xml") or die("can't open contact.xml");
$column = $xml->getElementsByTagName("column");
echo "<b>id: </b>" . $column[0]->nodeValue . "<br>";
echo "<b>firstname: </b>" . $column[1]->nodeValue . "<br>";
echo "<b>lastname: </b>" . $column[2]->nodeValue . "<br>";
echo "<b>email: </b>" . $column[3]->nodeValue . "<br>";