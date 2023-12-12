<?php
//find a miximum number from an array.
$numbers = [12, 45, 67, 89, 34, 56, 78, 90, 23, 45, 67, 89, 34, 56, 78, 90, 23, 45, 67, 89, 34, 56, 78, 90, 23, 45, 67, 89, 99,97];

$max = max($numbers);

echo "Maximum number :". $max."<br>";

#find 2nd max number from an array

rsort($numbers);

$uniqueNumber = array_unique($numbers);
$max2 = array_slice($uniqueNumber, 1, 1);
echo "2nd Max Number : ".$max2[0]."<br>";

#sort array from min to max
 
$smallnum = [2,3,4,1];

sort($smallnum);

echo sort($smallnum)."<br>";


#calculate average number of an array.
$avg = 


?>