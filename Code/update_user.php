<link rel="stylesheet" href="css/register.css">
<?php
require_once "header.php";
include 'DBH.php';

$sql = "SELECT * FROM users WHERE usersId = ".$_GET['id'];
$r = mysqli_query($conn, $sql) or die("chalena");

if(mysqli_num_rows($r) < 1) {
    die("xaina");
} else {
    while($rr = mysqli_fetch_assoc($r))
    echo ' <div class="formm">
    <form name="myform"  method="post"  action="updt.php?id='.$_GET['id'].'">
        <label>Number</label>
          <input type="text" value="'.$rr['usersCnum'].'"  name="number"><br><br>
        

        <label>Preferred Timing:</label>
        <select name="Timing" id="class" value='.$rr['userstiming'].'>
          <option value="Morning">Morning</option>
          <option value="Evening">Evening</option>
          
        </select>
        <br>


        <label>preferred class</label>
				<input type="checkbox" id="class1" name="pclass" value="g">
  				<label> gym</label>
  				<input type="checkbox" id="class2" name="pclass" value="c">
  				<label> cardio</label> 
  				<input type="checkbox" id="class3" name="pclass" value="z">
  				<label> zumba</label>
				<input type="checkbox" id="class4" name="pclass" value="A">
  				<label> aerobics</label>
			  	<br><br><br>

        <label>Other Requirements</label>
        <input type="text" name="otherreq" value='.$rr['usersotherreq'].'><br><br>
        
        <!-- <input type="submit" name="button"> -->
        <button type="submit" name="submit">Signup</button>

        
    </form>
</div>';

}



  
?>