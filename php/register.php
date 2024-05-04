		<?php
	if(isset($_POST["btnSubmit"]))
	{
		
		$email = $_POST["txtUname"];
		$password = $_POST["password"];
		
		$con = mysqli_connect("localhost","root","","tomatogamedb");
		if(!$con)
		{
			die("sorry,we are facing a technical issue");
		}
		$sql = "INSERT INTO `usertb` (`email`, `password`) VALUES ('".$email."', '".$password."');" ;
		
		mysqli_query($con,$sql) ;
		mysqli_close($con);
		header('Location:login.php');
		
	}
	
	?>	