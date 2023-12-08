<?php
//Math functions

$x = 5.4;


echo round($x)."<br>"; // abovie 0.5 to suggeste next number 0.5=1, 1.7= 2

echo ceil($x). "<br>"; // above 0.1 to suggest next number 0.3 = 1, 0.5 =1 

echo floor($x). "<br>";// return to below number 1.9 = 1, 1.1 =1.

echo pi(). "<br>"; // 3.1415926535898

echo min(0, 150, -200, -100). "<br>"; //minimun number should be show  result = -200
echo max(0, 99, -99, -90). "<br>"; // max munber show result = 99
echo abs(6.7)."<br>";


//get two value after decimal point 
echo number_format(pi(), 2)."<br>"; 

echo rand(). "<br>"; // random number change . 

echo uniqid(). "<br>"; // uniqic Id suggest.
echo rand(1, 100). "<br>"; // 1 to 100 random number change.
echo mt_rand(1, 100). "<br>";
echo sqrt(64). "<br>"; // Result = 8
echo pow(2, 3). "<br>"// 2 X 2 X 2 = 8 Power **













?>