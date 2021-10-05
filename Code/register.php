
<?php
	include_once "header.php"
	
?>
	<link rel="stylesheet" href="css/register.css">
	 
	<h3>BOOK NOW</h3><br>

		<p class="pop">If you’re interested in any classes at Muscle W
		orld please fill the form below and book your place.</p>
	<div class="formm">
		<form name="myform"  method="post"  action="sign.php">
			<label>First name:</label>
  			<input type="text"  name="fname"><br><br>
			
			<label for="">UserId</label>
			<input type="text" name="UId"><br><br> 

			<label>Email:</label>
  			<input type="email"  name="email"><br><br>
		
			<label>Contact Number:</label>
  			<input type="text"  name="Cnum" maxlength="10"><br><br>

			<label>Preferred Timing:</label>
			<select name="Timing" id="class" class="custom-select" style="width:auto;"> 
  			<option value="Morning">Morning</option>
  			<option value="Evening">Evening</option>
  			
			</select>
			<br><br>


			<label>Password:</label>
  			<input type="password"  name="pwd"><br><br>
			
			<label>Repeat-Password:</label>
			<input type="password"  name="pwdrepeat"><br><br>
			<label>Preferred class</label>
				<input type="checkbox" id="class1" name="pclass" value="g">
  				<label> GYM</label>
  				<input type="checkbox" id="class2" name="pclass" value="c">
  				<label> CARDIO</label> 
  				<input type="checkbox" id="class3" name="pclass" value="z">
  				<label> ZUMBA</label>
				<input type="checkbox" id="class4" name="pclass" value="A">
  				<label> AEROBICS</label>
			  	<br><br><br>

			<label>Other Requirements</label>
			<input type="text" name="otherreq" ><br><br>
			
			<!-- <input type="submit" name="button"> -->
			<button type="submit" name="submit" class="mit">Signup</button>

			
		</form>
	</div>
    



    <?php
        include_once "footer.php"
    ?>

	 	
</body>
</html>