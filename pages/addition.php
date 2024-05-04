<?php session_start();
if (!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maths Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../css/topic.scss">
</head>

<body>
	<div class="fullscreen-bg">
    <video loop muted autoplay  class="fullscreen-bg__video">
       
        <source src= "../images/video.mp4" type="video/mp4">
        
    </video>
</div>
	
    <div id="container">
		<div class='stripe-text' style="background-color: coral;font-size: 40px;">Check your addition skill</div>
			  
        <div id="score">
            Score: <span id="scorevalue">0</span>
			
        </div>
        <div id="correct">
            Correct
        </div>
        <div id="wrong">
            Try again
        </div>
        <div id="question">

        </div>
        <div id="instruction">
            Click on the correct answer
        </div>
        <div id="choices">
            <div id="box1" class="box"></div>
            <div id="box2" class="box"></div>
            <div id="box3" class="box"></div>
            <div id="box4" class="box"></div>
        </div>
        <div id="startreset">
            Start Game
        </div>
   
        <div id="timeremaining">
            Time remaining: <span id="timeremainingvalue">60</span>
        </div>
        <div id="gameOver">

        </div><br>
		<form action="addition.php" method="post" style="text-align: center;"  > 
			
	<?php
    
    include '../php/additionDB.php';
    ?>
	<input type="hidden" id="myInput" name="myInput" >
			
		<button type="submit" name="btnsubmit" style="color: white; background-color: #A45209; height: 50px; " >END THE GAME !!!</button>
		<button type="submit" style="color: white; background-color: #A45209; height: 50px; " ><a style="color: white;" href="subtraction.php">Enter to next level</a></button>
</form>
		
    </div>
    <script src="../js/scripts+.js"></script>
		
	
</body>

</html>