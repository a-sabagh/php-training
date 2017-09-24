<?php 
set_time_limit(120);
$url = "https://wordpress.org/latest.zip";
$file_name = "./file.zip";
$mode = "w";
$file_handler = fopen($file_name,$mode);
//-------------------------------------
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_FILE,$file_handler);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
$result = curl_exec($curl);
curl_close($curl);
fclose($file_handler);
if($result){
    echo "transfer successfully";
}else{
    echo "transfer fail";
}
