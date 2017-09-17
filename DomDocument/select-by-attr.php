<?php 
$html = <<<html
<html>
<head></head>
<body>
	<p>Wrong content</p>
	<p>Wrong content</p>
	<p class="me">Hello Wolrld</p>
	<p>Wrong content</p>
</body>
</html>
html;
$dom = new DomDocument();
$dom->loadHtml($html);
$p = $dom->getElementsByTagName("p");
foreach($p as $element){
	if($element->getAttribute("class") == "me"){
		echo $element->nodeValue;
	}
}