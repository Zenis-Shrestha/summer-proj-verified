<?php

    include 'DBH.php';
    session_start();
    $UId=$_POST['UId'];
    $pwd=$_POST['Pass'];

    $sql = "SELECT *  FROM users where usersemail ='$UId' and userspwd='$pwd';";
    $r = mysqli_query($conn, $sql);

    if(mysqli_num_rows($r) < 1) {
        die("bhayena entry");
    } else {
        while($rr = mysqli_fetch_assoc($r)){
            // if(password_verify($pwd, $rr['userspwd'])){
                $_SESSION['id'] = $rr['usersId'];
                $_SESSION['name'] = $rr['usersfname'];
                $_SESSION['class'] = $rr['userspclass'];
            
            //  } else {
            //      die();
            // }
        }    

            
            if($_SESSION['class'] == 'g') {
                header('location: gym.php');
                die();
            }
            if($_SESSION['class'] == 'A') {
                header('location: aero.php');
                die();
            }
              

        header("location:indev.php");

        die("welcome ".$_SESSION['name']);
    }
?>