<?php 

/**
 * ftp_transfer function structure
 */
function ftp_transfer($source_list,$destination_path){
    $config = [
        'server' => "HOST",
        'username' => 'USERNAME',
        'password' => 'PASSWORD'
    ];
    $connection = ftp_connect($config['server']);
    $login_result = ftp_login($connection,$config['username'],$config['password']);
    if(!$login_result){
        return [false];
    }
    if(false == ftp_nlist($connection,$destination_path)){
        ftp_mkdir($connection,$destination_path);
    }
    foreach($source_list as $source){
        $file_name = basename($source);
        $remote_file_path = $destination_path . "/{$file_name}";
        if(false == ftp_nlist($connection,$remote_file_path)){
            ftp_delete($connection,$remote_file_path);
        }
        $results[] = ftp_put($connection,$remote_file_path,$source,FTP_BINARY);
    }
    ftp_close($connection);
    return $results;
}

/**
 * Main script
 */
$destination_path = "public_html/woap-team";
$destination_url = "https://onlinerapp.ir/woap-team";

$source_list = [
    'scooter-band.jpg'
];

$results = ftp_transfer($source_list,$destination_path);
print_r($results);
?>
<a href="<?php echo $destination_url; ?>/scooter-band.jpg">click</a>