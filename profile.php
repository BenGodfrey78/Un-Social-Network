<?php include('components/header.php');
include('components/PHP/profile.php');?>

<body background="scripts/images/PCB.jpg">
<div class="backgroundImageCVR">
    <div class="background-image"></div>
    <div class="content">
	<?php include('components/navigation.php');?>
	<div id="middle">
		<div id="content1">
		<?php	
		if ($username != $loggedinusername){
		
			if ($isFollowing == true) {$followbutton = '<input type="submit" name="unfollow" value="Unfollow User">';} else {$followbutton = '<input type="submit" name="follow" value="Follow User">';}}
		
		?>
		<form action="profile.php?username=<?php echo $username;?>" method="post">
					
			<h3><?php echo $username?>&rsquo;s Profile  <?php if($verified) {echo ' - Verified  ';}if ($username != $loggedinusername){echo $followbutton;} ?>
		
		</form>
		</h3>
		<?php
			if ($username == $loggedinusername){
				echo '<form action="profile.php?username='.$username.'" method="post" enctype="multipart/form-data">';
					echo '<textarea name="postbody" rows="8" style="width:100%;"></textarea>';
					echo '<input type="submit" name="post" value="Post">';
				echo '</form>';
			}
			
		?>
				


	</div>		
</div>
</div>
</body>
