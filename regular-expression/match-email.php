<?php
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "foo@demo.net") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "bar.ba@test.co.uk") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "a.sabagh72@gmail.com") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "a.sabgh.comfa") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "info@as-abagh.com") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "#info@gmail.com") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "info@a_sabagh.ir") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "info.sdafas@a_sabagh.ir") . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , "info.sdafas@a_sa.b.agh.ir") . "<br>";

//Answers: 111010111