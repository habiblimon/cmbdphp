<?php
$personOne = "Abul mia";

function person(){
    global $personOne;
    echo $personOne;
}

person();
echo "<br>";

// $_SERVER superglobal

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REQUEST_URI']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";





?>