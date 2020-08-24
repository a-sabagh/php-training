<?php

public function get_viewer_ip(){
    $periority = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'REMOTE_ADDR'
    ];
    foreach($periority as $server_key){
        if(isset($_SERVER[$server_key])){
            return $_SERVER[$server_key];
        }
    }
}
