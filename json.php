<?php 
// convert PHP data into JSON data 
    $data = [
        "name" => "Habib",
        "email" => "habib29@gmail.com",
        "age" => 23,
        "skills" => ["PHP", "HTML", "CSS"],
        "city" => "Chittagong"

    ];




    // convert PHP data into JSON data 
    $jesonData = json_encode($data);
    echo $jesonData;
    echo "<br>";


    //convert json data into php data
    $phpData = json_decode($jesonData);
    echo "<pre>";
    print_r($phpData);
    echo "</pre>";
    echo "<br>";
 
  


?>