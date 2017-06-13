<?php include_once 'lib/jdf.php'; ?>
<html dir="rtl" lang="fa-IR">
    <head>
        <title>تبدیل تاریخ و زمان</title>
        <meta charset="UTF-8" >
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="year" placeholder="سال">
            <input type="text" name="mount" placeholder="ماه">
            <input type="text" name="day" placeholder="روز">
            <input type="submit" name="jgetdate" value="ارسال">
        </form>
        <?php 
        if(isset($_POST['jgetdate'])){
            $year = $_POST['year'];
            $mount = $_POST['mount'];
            $day = $_POST['day'];
            $timestamp = jmktime(0 , 0 , 0 ,  $mount , $day , $year);
            $date = jgetdate($timestamp);
            print_r($date);
        }
        ?>
        <hr>
        <p>jalali to gregorian</p>
        <form action="" method="post">
            <input type="text" name="year" placeholder="سال">
            <input type="text" name="mount" placeholder="ماه">
            <input type="text" name="day" placeholder="روز">
            <input type="submit" name="jalalitogregorian" value="ارسال">
        </form>
        <?php
        if(isset($_POST['jalalitogregorian'])){
            $jy = $_POST['year'];
            $jm = $_POST['mount'];
            $jd = $_POST['day'];
            $gregorian = jalali_to_gregorian($jy, $jm, $jd);
            echo 'year: ' . $gregorian[0] . '<br>';
            echo 'mount: ' . $gregorian[1] . '<br>';
            echo 'day: ' . $gregorian[2] . '<br>';
        }
        ?>
        <hr>
    </body>
</html>
