<?php
$serverName ="localhost";
$DbUsername="root";
$DbPassword="";
$DbName="summer";

$conn=mysqli_connect($serverName,$DbUsername,$DbPassword,$DbName);
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
    
}
?>