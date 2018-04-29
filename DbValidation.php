<?php
session_start();
$conn=new mysqli("localhost","root","","phpmydb");
	if($conn->connect_error)
		echo "failed";
	else 
		echo "success<br>";
	$db="create database phpdb";
	if($conn->query($db)==true)
		echo "success<br>";
	$table="create table users(userid varchar(20),password varchar(20));";
	if($conn->query($table)==true)
		echo "success<br>";
	$y="insert into users (userid,password)values ('abcd','123456');";
	if($conn->query($y)==true)
		echo "success<br>"; 
	$f=$f1=0;
	$mail=$pass="";
	if(isset($_POST['mail']))
		$mail=$_POST['mail'];
	if(isset($_POST['pass']))
		$pass=$_POST['pass'];
	$sql="select * from users";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
		if($mail==$row['userid'])
		{
			if($pass==$row['password'])
				exit("LoginSuccesful");
			else
				exit("Password Mismatch");
		}
	}
	$_SESSION['u']=$mail;
	$_SESSION['p']=$pass;
?>
<form method="post"action="registration.php">
You are not Registered::<br>
<h1>
Registration Form </h1>
Enter User Full Name:<input type="text"name="full"><br><br>
<input type="submit" value="submit">
</form>
