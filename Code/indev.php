<?php
 	include_once "header.php";
	session_start();
?>
<style>
	.feedback,.here,.submit{
		margin-left: 60px;
		color: #00ffff;
		background-color: #111;
	}


</style>

	<div class="layer">
		<div class="image">
			<img src="img/gym.jpg" width="100%">
		</div>
	</div>
	<?php
        if (isset($_SESSION['name'])) {
			echo'<form action="feedback.php?id='.$_SESSION['id'].'" method="POST">';
			echo'<p class="feedback">Feedback</p>';
			echo'<textarea  class="here"name="feedback" id="" cols="30" rows="5"></textarea><br>';
			echo'<button class="submit">submit</button>';
			echo'</form>';
        }
		else{
			
		}
	include_once "footer.php"
    ?>
</body>
</html>