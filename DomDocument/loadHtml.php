<?php 
$html = <<<html
<html>
	<head></head>
	<body>
		<h2>heading text</h2>
	</body>
</html>
html;
$dom = new DomDocument();
$dom->loadHtml($html);
echo $dom->getElementsByTagName("h2")->item(0)->nodeValue;