<?php
echo "<b>GlobalTimeStamp: </b>" . time() . "<br>";
//default timezone
$date = new DateTime(null);
echo 'Default timezone: '.$date->getTimestamp().'<br />'."\r\n";

//Asia/tehran
$date = new DateTime(null, new DateTimeZone('Asia/tehran'));
echo 'Asia/tehran: '.$date->getTimestamp().'<br />'."\r\n";

//America/New_York
$date = new DateTime(null, new DateTimeZone('America/New_York'));
echo 'America/New_York: '.$date->getTimestamp().'<br />'."\r\n";

//Europe/Amsterdam
$date = new DateTime(null, new DateTimeZone('Europe/Amsterdam'));
echo 'Europe/Amsterdam: '.$date->getTimestamp().'<br />'."\r\n";

echo '<h2>Default + Offset</h2>'."\r\n";
// WORK AROUND
//default timezone
$date = new DateTime(null);
echo 'Default timezone: '.($date->getTimestamp() + $date->getOffset()).'<br />'."\r\n";

//Asia/tehran
$date = new DateTime(null, new DateTimeZone('Asia/tehran'));
echo 'Asia/tehran: '.($date->getTimestamp() + $date->getOffset()).'<br />'."\r\n";

//America/New_York
$date = new DateTime(null, new DateTimeZone('America/New_York'));
echo 'America/New_York: '.($date->getTimestamp() + $date->getOffset()).'<br />'."\r\n";

//Europe/Amsterdam
$date = new DateTime(null, new DateTimeZone('Europe/Amsterdam'));
echo 'Europe/Amsterdam: '.($date->getTimestamp() + $date->getOffset()).'<br />'."\r\n";