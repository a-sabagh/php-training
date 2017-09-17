<?php 
$html = <<<html
<html>
	<head>
	</head>
	<body>
		<div class="row">
			<h2>heading</h2>
		</div>
	</body>
</html>
html;
$dom = new DomDocument();
$dom->loadHtml($html);
$h2 = $dom->getElementsByTagName("h2");
echo $h2->item(0)->parentNode->nodeName;