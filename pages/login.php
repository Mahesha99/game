<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/login.css">
<link href="https://fonts.cdnfonts.com/css/squibbles" rel="stylesheet"> 
<link href="https://fonts.cdnfonts.com/css/cartoon-free" rel="stylesheet"> 
<link href="https://fonts.cdnfonts.com/css/yrbkmess" rel="stylesheet">
</head>

<body>
	<div class="fullscreen-bg">
    <video loop muted autoplay  class="fullscreen-bg__video">
       
        <source src= "../images/video.mp4" type="video/mp4">
        
    </video>
</div>
	<img src="../images/topic.png" alt="" width="800" height="400">
	
<form action="login.php" method="post" >
		<?php
    
    include '../php/login.php';
    ?>
	<br>
						 
  <input type="text" name="txtUname" id="txtUname" placeholder="E-MAIL" required><br>
	
	<input type="password" name="password" id="password" placeholder="PASSWORD" required ><br>
	
	<button type="submit" name="btnsubmit" >Login</button>	
	<p><strong>DON'T HAVE AN ACCOUNT PLEASE REGISTER HERE</strong><a href="register.php">&nbsp;<em><strong>Register here</strong></em></a>  </p>
	
</form>
</body>
</html>