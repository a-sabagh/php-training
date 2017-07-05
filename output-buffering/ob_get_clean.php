<?php
ob_start();
?>
<div style="color:blue">Blue</div>
<?php
$blue = ob_get_clean();

echo $blue;