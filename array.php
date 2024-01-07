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
echo "<b> For loop : </b> <br>";
for ($i = 0; $i <count($studentNames); $i++){
    echo $studentNames[$i]."<br>";
}


#foreach loop 
echo "<b> ForEach loop : </b> <br>";
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
$studentsMul =[
    ["Habib", "Job", 31, "chittagong"],
    ["asik", "Eng. Civil", 27, "Borishal"],
    ["Nasir", "Foreing", 22, "Dhaka"],
    ["Rifat", "Doctor", 24, "CoxBazar"]
];


foreach($studentsMul as $students){
    
    foreach($students as $key => $value){
       if($key == count($students)- 1){
        echo $value;
       }else{
        echo $value.", ";
       }
    }
    echo "<br>";
}


echo is_array($students);




?>