<?php
# array function 


$names  = array("kamal", "jamal", "Tomal");

print_r($names);

echo "<br>";
#is_array

$cities = ["Dhaka"];

is_array($cities);

var_dump(is_array($cities));

echo "<br>";

#in_array
in_array("Kamal", $names);

var_dump(in_array("kamal", $names));

echo "<br>";

#array_marge 

$NameAndCities = array_merge($names, $cities);

print_r($NameAndCities);
echo "<br>";

#array_keys  - Assosiative array

$myInfon = [
    "Name  " => "Habib",
    "Gender" => "Male",
    "City  " => "Chittagong"
];

$allKyes = array_keys($myInfon);

print_r($allKyes);
echo "<br>";

#array_key_exists

array_key_exists("City", $myInfon);

var_dump(array_key_exists("city", $myInfon));

#array_shift    => Remove 1st array value .
#array_unshift  => Replace 1st array value + adding more value next step by step.
#array_push     => add new value in array items at last.
#array_pop      => last value remove from array.
#array_value    => 
#array_map      =>

array_map(function($n){
echo $n."<br>";
}, $names);



#array_uniq

$persons = ["habib", "limon", "Humaira", "Abiba"];
$unique_person = array_unique($persons);
echo "<br>";

print_r($unique_person);

#array_slice() // 
#array_diff() 
#array_search()
#array_reserse()
#






?>