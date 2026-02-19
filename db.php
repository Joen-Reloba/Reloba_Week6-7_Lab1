<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "assessment_db";


$conn = mysqli_connect($host, $user, $pass, $db_name);

//conditional statement

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>

