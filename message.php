<?php
	include('classes/DB.php');
	include('classes/Login.php');
	include('classes/post.php');
	include('classes/image.php');
	
$messageUsernameID = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['id'];
$messageUsernameName = DB::query('SELECT username FROM users WHERE id = :userid', array(':userid'=>$messageUsernameID))[0]['username'];
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="scripts/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/custom.js"></script>
</head>
	
<body bgcolor="#D8D8D8">


	<div class="messageBody">
		<h2><?php echo $messageUsernameName;?></h2>
		
		<div id="test" class="message"></div>
		
		
		<textarea id="messagecontent" type="text" rows= "2" id="messageFeild" ></textarea>
		<button id="sendmessage">Send</button>
		
	</div>

<script type="text/javascript">


</script>		
		
	
		  	
	</body>
	
<html>
