<?php
ob_start();
echo phpinfo();
$phpinfo = ob_get_contents();
ob_end_clean();
if(strpos($phpinfo , "mysqli")){
    echo "the mysqli is enabled";
}else{
    echo "the mysqli is disabled";
}