<?php 

//string

$personName = "Akram Khan";

var_dump($personName); // var_dump -> buiding function. // devloper tools

// var_dump() as like consol.log();

echo "<br>";


//integer  - number . without decimal
$personAge = 25;
var_dump($personAge);

echo "<br>";

//float
$personHeight = 5.8;
var_dump($personHeight);


echo "<br>";

//boolen
$personIsMale = true;
var_dump($personIsMale);

echo "<br>";


//array
// one kind of variable - bulk data .

$pernosHobbies = ["Reading", "coding", "Cooking", 123, true];
var_dump($pernosHobbies);

echo "<br>";

//object 

class personinfo{
    public $pName = "Habib Limon";

}

$obj = new personinfo;
var_dump($obj);

echo "<br>";

//null
$perName = null;
var_dump($perName);
echo "<br>";

//resource
$persName = fopen("data_types.php", "r");

var_dump($persName);

echo "<br>";



//single line comments
#this is also single line comment

/*
    This is 
    a Multi line 
    comments
*/

/**
 * 
 * 
 * 
 * 
 * */


$x = 123;
$x = 231;


define("y", 321);
echo y;

echo "<br>";






?>