<?php
include_once 'lib/jdf.php';
$d2 = mktime(23,11,55,12,20,2001);
echo $d2 . '<br>';
echo date("Y-d-m h:m:s" , $d2 ) . '<br>';
$d1 = strtotime("2015-01-01");
echo $d1 .  '<br>';
echo date("Y-d-m" , $d1 ) . '<br>';
echo date("Y-d-m" , 0) . '<br>';
echo microtime(FALSE) . '<br>';
echo date('l \t\h\e jS') . '<br>';
echo strftime("%a") . '<br>';
echo strftime("%j");
echo '<hr>';
echo date("Y-d-m H:i:s") .'<br>';
echo date_default_timezone_get() . '<br>';
$timezone_identifier = 'Asia/tehran';
date_default_timezone_set($timezone_identifier);
echo date("Y-d-m H:i:s") . '<br>';
echo date_default_timezone_get() . '<br>';
echo '<hr>';
$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
$yesterday = mktime(0,0,0,date("m"),date("d")-1,date("Y"));
$lastmount = mktime(0,0,0,date("m")-1,date("d"),date("Y"));
$lastYear = mktime(0,0,0,date("m"),date("d"),date("Y")-1);
$nextYear = mktime(0,0,0,date("m"),date("d"),date("Y")+1);
echo 'Today is: ' . $today . '<br>';
echo 'tomorrow is: ' . $tomorrow . '<br>';
echo 'yesterday is: ' . $yesterday . '<br>';
echo 'lastmount is: ' . $lastmount . '<br>';
echo 'next Year is: ' . $nextYear . '<br>';
echo '<hr style="border:0 none;border-bottom: 2px solid yellow">';
$today = date("Y-d-m" , $today);
$tomorrow = date("Y-d-m" , $tomorrow);
$yesterday = date("Y-d-m" , $yesterday);
$lastmount = date("Y-d-m" , $lastmount);
$lastYear = date("Y-d-m" , $lastYear);
$nextYear = date("Y-d-m" , $nextYear);
echo 'Today is: ' . $today . '<br>';
echo 'tomorrow is: ' . $tomorrow . '<br>';
echo 'yesterday is: ' . $yesterday . '<br>';
echo 'lastmount is: ' . $lastmount . '<br>';
echo 'next Year is: ' . $nextYear . '<br>';
echo '<hr style="border:0 none;border-bottom: 2px solid greenyellow">';
?>
<form method="post" action="">
    <input type="submit" name="submittime" >
</form>
<?php
if(isset($_POST['submittime'])){
    echo $time = date("Y-d-m H:i:s") . '<br>';
}
echo '<hr style="border:0 none;border-bottom: 2px solid red">';
//========================================================
//========================================================

$strftime = jstrftime("امروز %A %e %B ماه است.");
echo $strftime . '<br>';
echo 'english:' . mktime() . ' | persian" ' . jmktime() . '<br>';
print_r(getdate());
echo '<br><br>';
print_r(jgetdate());
echo '<br><br>';
print_r(jalali_to_gregorian(1396, 03, 21));
echo '<br>';
print_r(gregorian_to_jalali(2007, 06, 12));
echo '<br>';
$timestamp = jmktime(0,0,0,01,01,1372);
echo $timestamp . '<br>';
$timestamp = mktime();
echo $timestamp . '<br>';
echo jdate("q" , $timestamp);