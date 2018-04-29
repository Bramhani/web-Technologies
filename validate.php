<?php
$user=isset($_POST['user']) ? $_POST['user'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';
$con=mysqli_connect("localhost","root","","myDB");
if($con)
{
	$result=mysqli_query($con,"select * from Stu");
	while($row=mysqli_fetch_array($result))
	{
		if($row['Name']==$user && $row['psd']==$password)
		{
		die("succesfully logined");
		}
		else
		{
			die("Ooops! Invalid");
		}
		
	}
	
}
mysqli_close($con);
?>