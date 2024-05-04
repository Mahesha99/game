	  <?php
				if(isset($_POST["btnsubmit"])){				
				$userName = $_SESSION["userName"];
				$score =  $_POST["myInput"];
				
	$con = mysqli_connect("localhost","root","","tomatogamedb");
				if(!$con)
				{	
						die("Sorry, We are facing a technical issue");		
				}
					
		$sql = "INSERT INTO `divisionleaderboard` (`email`, `score`) VALUES ('".$userName."','".$score."');";
			
										
		mysqli_query($con,$sql) ;
		mysqli_close($con);
			}
				?>  