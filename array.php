<?php


// how to cheack PHP Version

echo "PHP Version : ",phpversion()."<br>";

//index array

$studentNames = ["Rahim", "Karim", "Rafiq", "jabbar", "kamal"];


echo "<pre>";
var_dump($studentNames);

print_r($studentNames);

echo gettype($studentNames);
echo "</pre>";


//for loop
echo "<b> For loo : </b> <br>";
for ($i = 0; $i <count($studentNames); $i++){
    echo $studentNames[$i]."<br>";
}


#foreach loop 
echo "<b> ForEach loo : </b> <br>";
foreach($studentNames as $value){
    
    echo $value."<br>";
}

//Associative Array
$studentData = [
    "Name" => "Rahim",
    "Age" =>25,
    "isMale" => true,
    "null" => null,
    "address" => "Dhaka"
];

foreach($studentData as $key =>  $value){
    echo "<div style='color:green'>".ucfirst($key) ." : ". $value."</div>";
}


#Multidimensional Array
$students =[
    ["Habib", "Job", 31, "chittagong"],
    ["asik", "Eng. Civil", 27, "Borishal"],
    ["Nasir", "Foreing", 22, "Dhaka"],
    ["Rifat", "Doctor", 24, "CoxBazar"]
];







?>