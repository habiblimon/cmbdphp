<?php 

//basename
$path = $_SERVER['PHP_SELF'];
echo basename($path);
echo "<br>";

//dirname

$path = $_SERVER['PHP_SELF'];
echo dirname($path);
echo "<br>";

//copy

#echo copy("text.php", "copy.php");
#echo "<br>";

//file()

echo file_exists("text.php");
echo "<br>";

echo is_file("text.php");
echo "<br>";

echo is_dir("text.php");

echo "<br>";

//file exists

if(file_exists("text.php")){
    echo "File exists";
}else{
    echo "File not exists";
}

echo "<br>";


//file_get_contents

$data = file_get_contents('text.php');

echo $data;

echo "<br>";

//file_put_contents

file_put_contents('text.php', $data);

echo "<br>";



//filesize

$size = filesize('text.php');

echo $size;

echo "<br>";

//filetype

$type = filetype('text.php');

echo $type;

echo "<br>";


//is_dir

if(is_dir("text.php")){
    echo "is_dir";
}else{
    echo "not is_dir";
}

echo "<br>";

//is_file

if(is_file("text.php")){
    echo "is_file";
}else{
    echo "not is_file";
}

echo "<br>";

//link

#$link = link('text1.php');

#echo $link;


//unlink

#unlink("text1.php");

//mkdir

#mkdir("text1");  Creat a new folder 

//rmdir
#rmdir('text1');  >> Remove file 

//move_uploaded_file

#move_uploaded_file("text1.php", "text2.php");


//pathinfo

$path = $_SERVER['PHP_SELF'];

$pathInfo = pathinfo($path);

echo $pathInfo['basename'];





?>