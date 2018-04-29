<?php
$name=$_REQUEST['username'];
$pass=$_REQUEST['password'];

$xml=simplexml_load_file("file.xml");
If($name==$xml->username && $pass==$xml->password)
{
	echo("login sucesses");
	
	return true;
}
Else
{
	echo("invalid username and pasword ");
	return false;
}
?>