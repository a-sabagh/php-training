<html dir="rtl" lang="fa-IR">
    <head>
        <title>دمای هوای شهر های ایران</title>
        <meta charset="utf-8">
	</head>
	<body>
		<?php 
		if(isset($_POST['submit'],$_POST['city'])){
			$city = $_POST['city'];
			$action = "https://www.accuweather.com/fa/search-locations";
			$post_fields = "s=" . $city . "&enter-postal-city=" . $city;
			
			$curl = curl_init();
			curl_setopt($curl,CURLOPT_URL,$action);
			curl_setopt($curl,CURLOPT_POST,TRUE);
			curl_setopt($curl,CURLOPT_POSTFIELDS,$post_fields);
			curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
			curl_setopt($curl,CURLOPT_HEADER,TRUE);
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
			$output = curl_exec($curl);
			curl_close($curl);
			$matches = array();
			$result = preg_match("/ADCConditionsV1=tp=([0-9]+)/" , $output , $matches);
			
			if($result){
				echo "دمای هوای شهر {$city} برابر با {$matches[1]} درجه فارنهایت است.";
			}
			
		}else{
		?>
			<form action="" method="post">
				<input type="text" name="city" >
				<input type="submit" name="submit" value="جستجو" >
			</form>
		<?php
		}
		?>
	</body>
</html>

