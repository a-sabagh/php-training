<?php
/*
* curl request in GET or POST http verb based on field_arr param
* with this function you can use arrays in cURL POST requests
*/
function curl_request($url, $fields_arr = array()) {

    $fields_string = http_build_query($fields_arr);
    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);

    if (!empty($fields_arr)) {
        curl_setopt($ch, CURLOPT_POST, count($fields_arr));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    }

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);
    return $result;
}
