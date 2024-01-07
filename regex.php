<?php


$str = "Hello World";

$pattern = "/world/i";

echo preg_match($pattern, $str);

echo "<br>";

#preg_match all() function
$str ="Hello world. Hello Bangladesh";
$pattern ="/hello/i";

echo preg_match_all($pattern, $str);

echo "<br>";

#Preg_replace() function

$str = "Hello world. Hello Bangladesh";
$pattern ="/hello/i";
$replace ="Hi";
echo preg_replace($pattern, $replace, $str);
echo "<br>";


#regex pattern
//[] - charackter classes
//{} - quantifier
//() - group


$mobile ="01909120886";
$pettern ="/^01[0-9]{9}$/";

echo preg_match($pettern, $mobile);

echo "<br>";

#regex strong password verification
$password = "aA@45678";
$pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})/";

echo preg_match($pettern, $password);

echo "<br>";

#regex Email Validation

$email = "voi@gin.com";
$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,5}$/";

echo preg_match($pettern, $email);

echo "<br>";











?>