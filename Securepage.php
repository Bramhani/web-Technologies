<?php
	$name="";
	if(isset($_POST['uid']))
	$name=$_POST['uid'];
	session_start();
	echo "Hello ". $name. "<br>";
	date_default_timezone_set("Asia/Calcutta");
	$t=date("h:i:s");
	echo "<p align=right> The Start time is $t </p>";
	$_SESSION['sid']=$t;
?>
<form method="post" action="Logout.php">
<p align=right> <input  type="submit" value=logout ></p>
</form>
