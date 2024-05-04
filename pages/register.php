
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/register.css">
<link href="https://fonts.cdnfonts.com/css/squibbles" rel="stylesheet"> 
<link href="https://fonts.cdnfonts.com/css/cartoon-free" rel="stylesheet"> 
<link href="https://fonts.cdnfonts.com/css/yrbkmess" rel="stylesheet">
	<script>
	
//password confirm
	function validateConfirmPassword()
		{
			var pwd=document.getElementById("password").value;
			var conpwd=document.getElementById("txtConfirmPassword").value;
			
			if(pwd !=conpwd)
				{
					alert("Password should match with confirm password !");
					return false;
				}
			return true;
		}
	
	//validate check box
	
function validateCheckBox()
		{
			var chk=document.getElementById("chk");
			if(chk.checked)
				{
					return true;
				}
			alert("You have to agree with the terms and conditions!");
			return false;
		}
		
		
		function validate()
		{
			if(validateConfirmPassword() && validateCheckBox())
				{
					return true;
				}
			else
				{
					event.preventDefault();
				}
		}
	</script>
</head>

<body>
	<div class="fullscreen-bg">
    <video loop muted autoplay  class="fullscreen-bg__video">
       
        <source src= "../images/video.mp4" type="video/mp4">
        
    </video>
</div>
	<img src="../images/topic.png" alt="" width="600" height="300">


<form action="register.php" method="post" >
	 
	<br>
						 
  <input type="text" name="txtUname" id="txtUname" placeholder="E-MAIL" required><br>
	
	<input type="password" name="password" id="password" placeholder="PASSWORD" required ><br>
	
	<input type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="CONFIRM PASSWORD" required/>
	
	<p><input type="checkbox" name="chk" id="chk" />&nbsp;&nbsp;&nbsp;&nbsp;I have read and accept <a href="">Terms and conditions</a> and <a href="">Privacy Policy</a> </p> 
	
	<button type="submit" name="btnSubmit" onClick="validate()" >REGISTER</button>
	<p style="padding-top: 10px;"><strong>HAVE AN ACCOUNT ?</strong><a href="login.php">&nbsp;<em><strong>Login</strong></em></a>  </p>
	
</form>
</body>
		<?php
    
    include '../php/register.php';
    ?>
</html>