<?php
//if statement 

$age = 50;

if ($age <= 12) {
    echo "You are child";
}elseif ($age <= 30) {
    echo "You are Younger";
} elseif ($age >50) {
    echo "You are Strong";
} else {
    echo "You are OLD";    
}

echo "<br>";

//switch statement
$day = "friday";

switch ($day) {
    case  "saturday":
        echo "Today Saterday";
        break;

    case "sunday":
        echo "Today Sunday";
         break;

    case "monday":
        echo "Today Monday";
         break;
    case "tuesday":
        echo "Today Tuesday";
        break;

    case "wednesday":
        echo "Today Wednesday";
         break;
         
    case "thusday":
        echo "Today Thusday";
         break;

    case "friday":
        echo"Today Friday";
         break;
    
    default:
        echo "Invalid Day";
        break;
}

echo "<br>";

// One line code for conditions  >>>>>  if (condition){ }elase{ }  - it's call tarnally operation

$cityName = "Chittogram";

echo ($cityName == "Chittogram") ? "You are from CTG " : "You are not from CTG";

echo "<br>";

if(isset($country)){
    echo $country;
}else{
    echo "Country is Not set <br>";

}

echo $country ?? "country is Not set - single line code <br>";





?>