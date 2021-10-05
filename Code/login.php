<?php
    include_once "header.php"
?>
<html>
    <style>
    .login{
        margin: auto;
        width: 350px;
        border: 3px solid white;
        top:80%;
        left: 38%;
        position: absolute;
        color: ccc;
        padding: 10px;
        margin-bottom: 30px;
        }
  
    input,button{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 175px;
        padding: 0.3rem 1.3rem;
    }

    </style>

    <div class="login">
        <form action="login_func.php" method="POST">
            <input type="text" name="UId" placeholder="UserId/Email"><br>
            <input type="password" name="Pass" placeholder="password"><br>
            <button type="submit" name="submit" >Login</button>
        </form>

    </div><br><br><br>

</html>

<?php
    include_once "footer.php"
?>