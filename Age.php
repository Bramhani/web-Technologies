<?php
$name=$_REQUEST['username'];
$age=$_REQUEST['age'];
if($age<=18)
{
echo("hello!".$name.".not authorized to visit this site");
}
else
{
echo("hello!".$name.".welcome to this site");
}
?>