<?php
//Arithmetic Operators

/**
 * + plus
 * - substract
 * * multiply
 * / divide
 * % modulus
 * ** exponentiation
 * 
*/

$x =10;
$y =3;

echo $x*$y;

echo "<br>";


//logical operators 

/**
 * && AND
 * || OR
 * ! NOT
 * xor
 * 
*/

$num1 = 10;
$num2 = 30;

if($num1 < $num2 and $num1 != $num2){
    echo "$num1 is less then $num2";
}

echo "<br>";

//comparison operators

/**
 * ==equal
 * ===identical (data type check)
 * !=not equal
 * !== not identical
 * <>not equal
 * <less than
 * >greater than
 * <= less than or equal to
 * >= greater than or equal to
*/



//asingment operators
/**
 * =equal
 * += add ans assign
 * -= subtract and assign
 * *= multiply and assign
 * /=divide and assign
 * %=modulus and assign 
 * .= concetenate and assign
 
*/


$age = 25;

echo $age;

echo "<br>";


echo $age +=5;
echo "<br>";
echo $age +=20;

echo "<br>";

$fName = "Habib";
$lName ="Limon";

echo $fName." ".$lName;









?>