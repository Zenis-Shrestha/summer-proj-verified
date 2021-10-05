<?php

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$email = $_POST['email'];
    $number = $_POST['number'];
    $Timing =$_POST['timing'];
    $pclass =$_POST['pclass'];

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into info(fname,email,number,timing,pclass) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $fname,$email,$number,$Timing,$pclass);
		$execval = $stmt->execute();
		echo $execval;
		echo"Registration successfully...";
		$stmt->close();
		$conn->close();
	}
}