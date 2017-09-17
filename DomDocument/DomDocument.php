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
		$xml = new DomDocument('1.0','UTF-8');
		$xml->load("contacts.xml");
		echo "<pre>";
		var_dump($xml);
		echo "</pre>";
	?>
	</body>
</html>
