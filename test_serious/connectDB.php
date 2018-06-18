<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
<?php include 'config.php';
	$objConnect = mysqli_connect($host,$user,$password);
	if($objConnect)
	{
		echo "Database Connected.";
	}
	else
	{
		echo "Database Connect Failed.";
	}

	mysqli_close($objConnect);
?>
</body>
</html>

<!--error example
Warning: mysqli_connect(): MySQL server has gone away in C:\xampp\htdocs\5831209121_Lab6\connectDB.php on line 7

Warning: mysqli_connect(): Error while reading greeting packet. PID=8432 in C:\xampp\htdocs\5831209121_Lab6\connectDB.php on line 7

Warning: mysqli_connect(): (HY000/2006): MySQL server has gone away in C:\xampp\htdocs\5831209121_Lab6\connectDB.php on line 7

Fatal error: Maximum execution time of 30 seconds exceeded in C:\xampp\htdocs\5831209121_Lab6\connectDB.php on line 7
-->
