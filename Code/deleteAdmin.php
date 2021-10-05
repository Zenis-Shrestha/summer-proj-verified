<?php
include 'DBH.php';
session_start();
if(!isset($_GET['id'])){
    header('Location: admin.php');
    die();
} if (!isset($_SESSION['id'])){
    header('Location: admin.php');
    die();
}

$sql = "DELETE FROM users WHERE usersId = ".$_GET['id'];
$r = mysqli_query($conn, $sql);

header('Location: admin.php?a=sucess');
?>