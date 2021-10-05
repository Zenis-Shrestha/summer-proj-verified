<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/index.css">
	 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<div class="info">
			<p style="color:black;text-align:right;margin-right: 50px;">contact:4595652  muscleworld@gmail.com </p>
		</div>
		<div class ="main" style="display:flex;">
			<div class =logo>
				<img src="img/logo.png" height="50px">
			</div>
			<div class="ddp">
				<ul>
					<li class="active"><a href="indev.php">Home</a></li>
					<li><a href="#">Training</a>
						<ul>
							<li><a href="schdule.php">Schdule</a></li>
							<li><a href="gym.php">Gym</a></li>
							<li><a href="aero.php">Aero</a></li>
							<li><a href="zumba.php">Zumba</a></li>
						</ul>
					</li>
					<li><a href="pack.php">Prices</a></li>
					<?php 
						if(isset($_SESSION['name'])){
							
					echo '<li><a href="logout.php">Logout</a></li>';
						} else {
							echo '<li><a href="login.php">Login</a></li>';
						}
					?>
				

				</ul>
				
			</div>
			<div class="burger"><img src="img/burger.png" alt="" width="30px"></div>
		</div>
		<div class="title">
			<h1>Train Insane</h1>
		</div>
		

		<?php 
						if(isset($_SESSION['name'])){
							
					echo '<div class ="buttons">
		
					<a href="register.php">'.$_SESSION['name'].'</a>
				</div> ';
						} else {
							echo '<div class ="buttons">
		
							<a href="register.php" class="btn">BOOK NOW</a>
						</div> ';
						}
					?>
	</header>

