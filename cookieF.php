<html>
<head> <title> User Acess </title> </head>
<body> <br>
<center>
<?php
	error_reporting(0);
	if($_POST['list'])
	{
	foreach($_COOKIE as $key=>$val)
	{
	echo "<center>".$key."is at".$val."in jntuhces<br> </center>";
	}
	}
?>
</center>
</body>
</html>