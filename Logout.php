<?php
	$p=$n=array();
	session_start();
	$t=$_SESSION['sid'];
	$p=explode(":",$t);
	date_default_timezone_set("Asia/Calcutta");
	$x=date("h:i:s");
	$n=explode(":",$x);
	$h=$n[0]-$p[0];
	$m=$n[1]-$p[1];
	$s=$n[2]-$p[2];
	echo "the time taken is $h:$m:$s <br>";
	echo "Logged out scuccessfully";
	session_destroy();
?>
