
<html>
<head> <title> Cookie </title> </head>
<body>
<center>
<form action="cookieF.php" method="post">
<input type="submit" value="LIST COOKIES" name="list">
</form>
</center>
<?php
error_reporting(0);
$exp=time()+86400;
setcookie("CSELAB","FIRSTFLOOR",$exp,'/');
setcookie("MCALAB","GROUNDFLOOR",$exp,'/');
setcookie("ECELAB","SECONDFLOOR",$exp,'/');
?>
</body>
</html>