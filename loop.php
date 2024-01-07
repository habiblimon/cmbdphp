<?php

//start point 
//end point 
//incremet / decrement


//while loop

$x = 0;

while($x <3){
    echo $x ."<br>";
    $x++;
}

//do while loop

$y=35;

do{
    echo $y."<br>";
    $y++;

}while($y <16);



//for loop

for ($i=0; $i < 5; $i++) { 
    echo $i . "<br>";
}

//foreach loop

$color =  ["red", "green", "blue", "yellow"];
foreach($color as $value){
    echo $value.",";
    echo "<br>";
}


$ghor = 5;

for ($i=1; $i <= 10; $i++) { 
    echo $ghor." X ".$i." = ".$ghor*$i."<br>";
}








?>