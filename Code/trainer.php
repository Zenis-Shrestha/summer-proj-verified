<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/trainer.css">
    
</head>
<style>
    .image_flex {
    display: flex;
    background-color: rgb(22, 22, 22);
    justify-content: center;
    align-items: center;
    height: 250px;
    padding-left: 40px;
}
.image_flex>div{
    background-color: rgb(22, 22, 22);
    margin:20px;
    padding: 10px;
}
.flexing>img{
    width: 250px;
    transition: width 0.6s;
}
.flexing>img:hover{
    width:300px;
    transition: 0.6s ease;
}
</style>


<body>
    <div class="info">
        <p style="color:black;text-align:right;margin-right: 50px;">contact:459652  @gmail.com </p>
    </div>
    <div class ="main" style="display:flex;">
        <div class =logo>
            <img src="img/logo.png">
        </div>
        <div class="ddp">
            <ul>
                <li class="active"><a href="index.html">home</a></li>
                <li><a href="#">Training</a>
                    <ul>
                        <li><a href="schdule.php">schdule</a></li>
                        <li><a href="gym.php">gym</a></li>
                        <li><a href="aero.php">aero</a></li>
                        
                    </ul>
                </li>
                <li><a href="pack.php">Prices</a></li>
                <li><a href="login.php">Login</a></li>
                
            </ul>
        </div>
    </div>
    <div class="mainboxx">
        <div class="infom">
            <p style="font-size: 50px; font-family: 'Antonio', sans-serif;">Ramesh Shrestha</p><br>

            <p style="font-size: 30px; font-family: 'Antonio', sans-serif;">Experience: 20 years</p><br>

            <p style="font-size: 30px; font-family: 'Antonio', sans-serif;">Expertise: Weight Training</p><br>

            <p style="font-size: 30px; font-family: 'Antonio', sans-serif;">Achievement:</p><br>
            <p style="font-size: 30px; font-family: 'Antonio', sans-serif;">1st position, SAARC GAMES 2018 </p><br>
            <p style="font-size: 30px; font-family: 'Antonio', sans-serif;">Mr.Kathmandu 2017</p>
        </div>
        <div class="image">
            <img src="img/rameshguru.jpg" alt="">
        </div>

    </div><br><br>
    <div class="image_flex">
			<div class="flexing">
				<img src="img/111.jpg" alt="">
			</div>
			<div class="flexing">
				<img src="img/333.jpg" alt="">
			</div>
			<div class="flexing">
				<img src="img/222.jpg" alt="">
			</div>
			<div class="flexing">
				<img src="img/111.jpg" alt="">
			</div>
			
		</div><br>


    <footer>
        <Div class="lower">
            
            <div class="row1">
                <ul>
                    <li>Navigation</li><br>
                    <li><a href="register.html">about us</a></li>
                    <li><a href="register.html">about us</a></li>
                </ul>
            </div>
            <div class="row2">
                <ul>
                    <li>Contact Information</li><br>
                    <li>Nayabazar Ktm</li>
                    <li>Tel:01-4365869</li>
                </ul>
            </div>
            <div class="row3">
                <ul>
                    <li>WE ARE OPEN</li><br>
                    <LI>Sun-Fri:6.00-20-00</LI>
                    <li>Sat:9.00-12.00</li>
                </ul>
            </div>
        </Div>
    </footer>
</body>
</html>