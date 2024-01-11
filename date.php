<?php 
    
    //date defult time zone

    date_default_timezone_set("Asia/Dhaka");
    echo date("Y-m-d h:i:s a");
    echo "<br>";


    // mktime (hour, minute, second, month, day, year)
    echo date("Y-m-d h:i:s a", mktime(0, 0, 0, 2, 18, 2024));
    echo "<br>";

    //strtotime (time)

    $myBirthday = strtotime("1990-01-01");

    $myStrTime = strtotime("2024-01-01 00:00:00");
    echo $myStrTime;
    echo "<br>";

    //next 7 friday
    echo date("Y-m-d h:i:s a", $myStrTime + (7 * 24 * 60 * 60));
    echo "<br>";

    while($myStrTime <= $myBirthday){
        echo date("Y-m-d h:i:s a", $myStrTime);
        echo "<br>";
        $myStrTime += 24 * 60 * 60;

    }


    # Filter 
    $myVar = 123;
    
    filter_var($myVar , FILTER_VALIDATE_INT);
    



?>