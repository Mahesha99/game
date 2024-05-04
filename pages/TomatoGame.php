<?php session_start();
if (!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en-gb">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="GENERATOR" content="A plain text editor">
    <meta name="Author" content="Marc Conrad">
    <meta name="Description" content="SmileGame">
	<link rel="stylesheet" href="../css/style1.css">
	<link href="https://fonts.cdnfonts.com/css/squibbles" rel="stylesheet">    
	<title>Final Game</title>
	
<script src="../js/tomato.js"></script>
</head>

<body>
	<!-----------------------wallpaer-------------------------->
<div class="fullscreen-bg">
    <video loop muted autoplay  class="fullscreen-bg__video">
       
        <source src= "../images/video.mp4" type="video/mp4">
        
    </video>
</div>
	
	
    <div align="center" class="row begin-countdown">
		
<div class="div1">

	<p style="font-size: 50px;padding-top:20px;font-family: 'Squibbles', sans-serif;color:aliceblue;">Final level &nbsp;&nbsp; !!! &#129395;</p>
<div class="my-element">
        <img id="quest" src="https://www.sanfoh.com/uob/smile/data/se0c278968599908a91e717dff6n445.png" alt="">
	</div>
  <!----timer---><br><br>
	<div class="col-md-12 text-center">
            <div class="div2" id="countdown"></div>
   </div> <br>
	
        <div >
          
            <h3>Select the missing digit:</h3>
			<button class="button-19" id="button0" onclick="checkSolution(0)">0</button>
			<button class="button-19" id="button1" onclick="checkSolution(1)">1</button>
			<button class="button-19" id="button2" onclick="checkSolution(2)">2</button>
			<button class="button-19" id="button3" onclick="checkSolution(3)">3</button>
			<button class="button-19" id="button4" onclick="checkSolution(4)">4</button><br>
			<button class="button-19" id="button5" onclick="checkSolution(5)">5</button>
			<button class="button-19" id="button6" onclick="checkSolution(6)">6</button>
			<button class="button-19" id="button7" onclick="checkSolution(7)">7</button>
			<button class="button-19" id="button8" onclick="checkSolution(8)">8</button>
			<button class="button-19" id="button9" onclick="checkSolution(9)">9</button>
        </div>
        <h2>score : <span id="score"></span></h2>
	

    </div>
   </div>        

	<script>
            startup();
    </script>
		<form action="TomatoGame.php" method="post" style="text-align: center;"  > 
			
	<?php
    
    include '../php/tomatoDB.php';
    ?>
	<input type="hidden" id="myInput" name="myInput" >
			
			<button type="submit" name="btnsubmit" style="color: white; background-color: #A45209; height: 50px; " >END THE GAME !!!</button>
			<button type="submit" style="color: white; background-color: #A45209; height: 50px; " ><a style="color: white;" href="leaderboard.php">Watch leaderboard</a></button>
			</form>
			 
</body>

</html>