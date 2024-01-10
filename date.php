<?php 
    
    //date defult time zone

    date_default_timezone_set("Asia/Dhaka");
    echo date("Y-m-d h:i:s a");
    echo "<br>";


    //strtotime (time)

    $myBirthday = strtotime("1990-01-01");

    $myStrTime = strtotime("1990-01-01 00:00:00");
    echo $myStrTime;



?>