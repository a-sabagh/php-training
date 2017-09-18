<?php 

$xml = <<<EOD
<?xml version="1.0" ?>
<chapter xmlns:xi="http://www.w3.org/2001/XInclude">
<title>Books of the other guy..</title>
<para>
 <xi:include href="book.xml">
  <xi:fallback>
   <error>xinclude: book.xml not found</error>
  </xi:fallback>
 </xi:include>
 <include>
  This is another namespace
 </include>
</para>
</chapter>
EOD;
$dom = new DOMDocument;
$dom->loadXML($xml);

$ns = $dom->getElementsByTagNameNS("http://www.w3.org/2001/XInclude","fallback");

echo $ns->item(0)->localName;
echo "<br>";
echo $ns->item(0)->prefix;
echo "<br>";
echo $ns->item(0)->nodeValue;