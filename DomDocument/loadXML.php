<?php 
$note = <<<note
<root>

<h:table xmlns:h="http://gnutec.ir/xml/house">
  <h:tr>
    <h:td>Apples</h:td>
    <h:td>Bananas</h:td>
  </h:tr>
</h:table>

<f:table xmlns:f="https://gnutec.ir/xml/furniture">
  <f:name>African Coffee Table</f:name>
  <f:width>80</f:width>
  <f:length>120</f:length>
</f:table>

</root> 
note;
$xml = new DomDocument();
$xml->loadXML($note);

$fname = $xml->getElementsByTagNameNS("https://gnutec.ir/xml/furniture","name");
echo "<pre>";
var_dump($fname->item(0));
echo "</pre>";