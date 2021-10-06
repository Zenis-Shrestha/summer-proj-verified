<?php
session_start();
include 'DBH.php';
if(!isset($_SESSION['name'])) {
    header('Location: login.php');
    die();
}
    $uid = $_GET['id'];
    $fback = $_POST['feedback']; 
    $name = $_SESSION['name'];

    $sql = "INSERT INTO feedback (usersId , feedback, name) VALUES ('$uid','$fback','$name');";
    $r = mysqli_query($conn, $sql);

    header('Location: indev.php?f=sucess');

?>