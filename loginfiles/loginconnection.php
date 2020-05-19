<?php

$host="127.0.0.1";
$user="root";
$password="";
$database="test";

try{

$connect=  mysqli_connect($host, $user, $password, $database);
echo"you are connected <br>";
}catch(PDOException $e){
    echo $e->getMessage();
}

?>
