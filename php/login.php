  <?php 
				if( isset($_POST["btnsubmit"])){
				$userName = $_POST["txtUname"];
				$password = $_POST["password"];
			
			$con = mysqli_connect("localhost","root","","tomatogamedb");
					if(!$con)
					{
						die("Cannot connect to Db server");
					}
				$sql = "SELECT * FROM `usertb` WHERE `email`='".$userName."' AND `password` ='".$password."';";
					$results = mysqli_query($con,$sql) ;
					
				
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["userName"] = $userName;
					header('Location:home.html');
				}
			  else
			  {
				  echo "Please enter a correct username and a password";
			  }
			}
			  ?>