<?php 
 if (isset($_POST["submit"])) {

     $fname=$_POST['fname'];
     $UId=$_POST['UId'];
     $email=$_POST['email'];
     $Cnum=$_POST['Cnum'];
     $timing=$_POST['Timing'];
     $pwd=$_POST['pwd'];
     $pwdrepeat=$_POST['pwdrepeat'];
     $pclass=$_POST['pclass'];
     $otherreq=$_POST['otherreq'];

     require 'DBH.php';
     require 'functions.php';

    //  $hashpwd = password_hash($pwd,PASSWORD_DEFAULT);

    //  $sql = "INSERT into users (usersfname,usersUId,usersemail,usersCnum,userstiming,userspwd,userspclass,usersotherreq) VALUES ('$fname','$UId','$email','$Cnum','$timing','$hashpwd','$pclass','$otherreq');";
    //  $r = mysqli_query($conn, $sql);

     if (emptyInputSignup($fname, $UId, $email, $Cnum, $timing, $pwd, $pwdrepeat, $pclass, $otherreq) !== false) {
         header("location:register.php?error=emptyinput");
         exit();
     }
     if (invalidUid($UId)!==false) {
         header("location:register.php?error=invalid uid");
         exit();
     }
     if (invalidemail($email)!==false) {
         header("location:register.php?error=invalid email");
         exit();
     }
     if (pwdMatch($pwd, $pwdrepeat)!== false) {
         header("location:register.php?error=password dont match");
         exit();
     }
     if (UidExists($conn, $UId, $email)!== false) {
         header("location:register.php?error=username taken ");
         exit();
     }
     createUser($conn, $fname, $UId, $email, $Cnum, $timing, $pwd, $pclass, $otherreq);
 }
 else{
     header("location:gym.php");
     exit();
 }
    
?>