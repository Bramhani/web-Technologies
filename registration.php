<?php
$ins="";
session_start();
$conn=new mysqli("localhost","root","","phpdb");
	if($conn->connect_error)
	echo "failed";
	else
	echo "success<br>";
$user=$_SESSION['u'];
$pass=$_SESSION['p'];
	echo $user." <br>";
	echo $pass."<br>";
	if(isset($_POST['full']))
		$fname=$_POST['full'];
		echo $fname."<br>";
	$ins="insert into users values('$user','$pass','$fname')";
	if($conn->query($ins)==true)
	{
		echo "success <br>";
		echo "data stored successfully into database<br>";
	}
	else 
		echo "fail <br>";

?>
