<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["showName"])){
    $realName =  $_POST["name"];
}


?>

<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="name" id="" placeholder=" Enter your Name">
    <input type="submit" value="Submit" name="showName">
</form>

<?php 

    echo $realName  ?? null;
?>