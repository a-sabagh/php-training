<html>
	<head>
		<title>DomDocument</title>
		<meta charset="UTF-8">
		<style>
		pre{
			border: 1px solid gray;
			border-radius: 10px;
			padding: 20px;
			margin: 30px;
		}
		</style>
	</head>
	<body>
	<?php
		$dom = new DomDocument();
		$dom->loadHtmlFile("file.html");
		$p = $dom->getElementsByTagName("p");
		echo "<pre>";
		echo "<h2>Paragraph var_dump</h2>";
		var_dump($p);
		echo "</pre>";
		echo "<pre>";
		echo "<h2>FirstChild Paragraph var_dump</h2>";
		var_dump($p->item(0));
		echo "</pre>";
		echo "<pre>";
		echo "<h2>DOM var_dump</h2>";
		var_dump($dom);
		echo "</pre>";
	?>
	</body>
</html>