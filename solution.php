<?php
//Electric bill calculation (for first 50 unit - 3.5tk/ unit for next 100 units - 4.00m tk/unit for next 100 units - 5.20 tk/units for units for units above 250 - 6.50tk/unit)

$eBill = 300;

if($eBill <= 50){
    echo 3.5 *$eBill;
}elseif($eBill <= 150){
    echo (3.5 * 50)+(4 * ($eBill - 50));
}elseif($eBill <=250){
    echo (3.5 * 50)+(4 * 100)+(5.20 *($eBill - 150));
}else{
    echo (3.5 * 50)+(4 * 100)+(5.20 * 100)+(6.50 * ($eBill - 250));
}

echo "<br>";






// A PHP calculator using switch case (addition, Subtraction, Multiplication, Division)

$num1 = 10;
$num2 = 5;
$operator = "/";

switch ($operator) {
    case '+':
        echo $num1+$num2;
        break;

     case '-':
        echo $num1-$num2;
        break;
    case '*':
        echo $num1*$num2;
        break;
    case '/':
        echo $num1/$num2;
        break;


    default:
        echo "Invatild operator ";
        break;
}

echo "<br>";


// check if a person is eligible for marriage in BD by gender 

$gendar = "Female";
$age = 30;

if($gendar == "Female"){
    if($age >=18){
        echo "You are eligible for marriage <br>";
    }else{
        echo "You are not eligible ! <br>";
    }
}elseif ($gendar == "Male") {
    if($age >= 21){
        echo "You are eligible for marriage <br>";
    }else{
        echo "You are not eligible ! <br>";
    }
}else{
    echo "disition pendding .... 404 <br>"; 
}


// check if a number positive, nagative or zero

$num = 2;


if($num >0){
    echo "positive";
}elseif($num <0){
    echo "Negative";
}else{
    echo "Zero";
}


echo "<br>";


?>