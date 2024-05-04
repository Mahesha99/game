<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/leaderboard.css">

</head>

<body style="	color: aliceblue;">
	<br><br><br>
	<div class='stripe-text' style="background-color: coral;font-size: 40px;text-align: center;"><strong style="color: #FFA400">LEADERBOARD</strong></div><br><br><br>
	
	<div class="row" align="center" style="font-size: 20px;">
  <div class="column" style="background-color:#aaa;">
    <h2 style="color: cyan;">Addition Leaderboard</h2>
       <table width="200" border="1">
  <tbody>
    <tr>
      <td>Name</td>
      <td>Score</td>
    </tr>
	  <?php
				$con = mysqli_connect("localhost","root","","tomatogamedb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql = "SELECT * FROM `additionleaderboard` ORDER BY score DESC";
		  
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
				
				?>
    <tr>
		
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['score'];?></td>
		
				
    </tr>		
	  <?php
						
				}
			}
				mysqli_close($con);
				?>
  </tbody>
</table>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2 style="color:#00F765;">Subtraction Leaderboard</h2>
       <table width="200" border="1">
  <tbody>
    <tr>
      <td>Name</td>
      <td>Score</td>
    </tr>
	  <?php
				$con = mysqli_connect("localhost","root","","tomatogamedb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql = "SELECT * FROM `subtractionleaderboard` ORDER BY score DESC";
		  
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
				
				?>
    <tr>
		
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['score'];?></td>
		
				
    </tr>		
	  <?php
						
				}
			}
				mysqli_close($con);
				?>
  </tbody>
</table>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2 style="color:#E3D259;">Multiplication Leaderboard</h2>
          <table width="200"  border="1">
  <tbody>
    <tr>
      <td>Name</td>
      <td>Score</td>
    </tr>
	  <?php
				$con = mysqli_connect("localhost","root","","tomatogamedb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql = "SELECT * FROM `multiplicationleaderboard` ORDER BY score DESC";
		  
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
				
				?>
    <tr>
		
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['score'];?></td>
		
				
    </tr>		
	  <?php
						
				}
			}
				mysqli_close($con);
				?>
  </tbody>
</table>
  </div>
		 <div class="column" style="background-color:#bbb;">
    <h2 style="color:#EE6E58;">division Leaderboard</h2>
         <table width="100%" border="1">
  <tbody>
    <tr>
      <td>Name</td>
      <td>Score</td>
    </tr>
	  <?php
				$con = mysqli_connect("localhost","root","","tomatogamedb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql = "SELECT * FROM `divisionleaderboard` ORDER BY score DESC";
		  
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
				
				?>
    <tr>
		
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['score'];?></td>
		
				
    </tr>		
	  <?php
						
				}
			}
				mysqli_close($con);
				?>
  </tbody>
</table>
  </div>
		 <div class="column" style="background-color:#aaa;">
    <h2 style="color:#A155CE;">Tomato winners Leaderboard</h2>
          <table width="200" border="1">
  <tbody>
    <tr>
      <td>Name</td>
      <td>Score</td>
    </tr>
	  <?php
				$con = mysqli_connect("localhost","root","","tomatogamedb");
				
				if(!$con)
				{
					die("Cannot connect to DB server");
				}
				$sql = "SELECT * FROM `tomatodb` ORDER BY score DESC";
		  
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)> 0)
					
				{
					while($row = mysqli_fetch_assoc($result))
					{
						
				
				?>
    <tr>
		
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['score'];?></td>
		
				
    </tr>		
	  <?php
						
				}
			}
				mysqli_close($con);
				?>
  </tbody>
</table>
  </div>
	
	
		
</div><br><br><br><br>
	<div align="center">
		<button type="submit" style="color: white; background-color: #A45209; height: 50px;text-align: center; " ><a style="color: white;" href="home.html">Go to Home Page</a></button>
	</div>
</body>
</html>