<!DOCTYPE html>
<html>
	<head>
		<title>imap protocol</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		set_time_limit(4000);
		$imap_path = "{server1.ariazdevs.com:993/imap/ssl}INBOX";
		$username = "info@asabagh.ir";
		$password = 's*bgqDPc(.$L';

		$inbox = imap_open($imap_path , $username , $password);
		$emails = imap_search($inbox , "ALL");
		$i = 0;
		foreach($emails as  $key=>$email){
			$header_info = imap_headerinfo($inbox , $email);
			echo "<h1>imap headerinfo</h1>";
			echo '<pre>';
			var_dump($header_info);
			echo '</pre><hr><hr>';
			$mail_structure = imap_fetchstructure($inbox , $email);
			echo "<h1>imap structure</h1>";
			echo '<pre>';
			var_dump($mail_structure);
			echo '</pre><hr>';
			echo '<h1>mail body message</h1>';
			$mail_body = imap_fetchbody($inbox, $email , 1);
			echo $mail_body;
			$i++;
			echo "<hr>";
		}
		imap_expunge($inbox);
		imap_close($inbox);
		?>
	</body>
</html>
