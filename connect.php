<?php

$host="localhost:3307";
$user="root";
$pass="";
$db="e-com1";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>