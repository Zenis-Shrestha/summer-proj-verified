<?php
    function emptyInputSignup($fname,$UId,$email,$Cnum,$timing,$pwd,$pwdrepeat,$pclass,$otherreq){
        // $result ;
        if(empty($fname) || empty($UId) || empty($email) || empty($Cnum) || empty($timing) || empty($pwd) || empty($pwdrepeat) || empty($pclass) || empty($otherreq)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
}  

    function invalidUid($UId){
          $result = null;
          if(!preg_match("/^[a-zA-Z0-9]*$/",  $UId)){
              $result = true;
          }
          else{
              $result = false;
          }
          return $result;
     }  

    function invalidemail($email){
        
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }

    function pwdMatch($pwd,$pwdrepeat){
        
        if ($pwd !== $pwdrepeat){
            $result=true;
        }
        else{
            $result=false;
        }
        return $result;
    }

    function UidExists($conn,$UId,$email){
        $sql = " SELECT * FROM  users WHERE  usersUId=? OR usersEmail =?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location:register.php?error=stmt Failed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"ss",$UId,$email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result=false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }


    function createUser($conn,$fname,$UId,$email,$Cnum,$timing,$pwd,$pclass,$otherreq){
        $hashpwd = password_hash($pwd,PASSWORD_DEFAULT);
        $sql = " INSERT INTO users(usersfname,usersUId,usersemail,usersCnum,userstiming,userspwd,userspclass,usersotherreq) VALUES(?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn) or die("XUYA");
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location:register.php?error=stmt Failed");
            exit();
        }

        $hashpwd = password_hash($pwd,PASSWORD_DEFAULT);
        
        mysqli_stmt_bind_param($stmt,"sssissss",$fname,$UId,$email,$Cnum,$timing,$hashpwd,$pclass,$otherreq) or die('okay but not ');
        mysqli_stmt_execute($stmt) or die('hehe');
        // mysqli_query($conn, $sql);
        mysqli_stmt_close($stmt);
        header("location:gym.php?error=none");
        exit();
        

        // $resultData = mysqli_stmt_get_result($stmt);

        // if($row = mysqli_fetch_assoc($resultData)){
        //     return $row;
        // }
        // else{
        //     $result=false;
        //     return $result;
        // }
        // mysqli_stmt_close($stmt);
    }



