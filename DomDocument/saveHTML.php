<?php
$doc = new DomDocument();
$doc->loadHtmlFile("file.html");
$p = $doc->getElementsByTagName("p")->item(0);
echo $doc->saveHTML($p);
echo "<hr>";
echo $doc->saveHTML();
echo "<hr>";
$doc = new DOMDocument();
$doc->loadHTML("<html><body>Test<br></body></html>");
echo $doc->saveHTML();