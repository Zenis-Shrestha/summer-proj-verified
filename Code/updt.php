<?php
include 'DBH.php';
$num = $_POST['number'];
$timin = $_POST['Timing'];
$class = $_POST['pclass'];
$req = $_POST['otherreq'];
    $sql = "UPDATE users    
    SET usersCnum = '$num', userstiming = '$timin', userspclass='$class', usersotherreq='$req'
    WHERE usersId = ".$_GET['id'];

    $r = mysqli_query($conn, $sql) or die("chalena");
    header('Location: admin.php');
?>