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
