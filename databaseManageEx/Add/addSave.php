<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
<?php include '../config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
	//$objDB = mysqli_select_db("registration");
	for($i=1;$i<=$_POST["hdnLine"];$i++)
	{
		if($_POST["txtPid$i"] != "")
		{

			$strSQL = "INSERT INTO professor ";
			$strSQL .="(pid,pname,salary) ";
			$strSQL .="VALUES ";
			$strSQL .="('".$_POST["txtPid$i"]."', ";
			$strSQL .="'".$_POST["txtPname$i"]."', ";
			$strSQL .="'".$_POST["txtSalary$i"]."') ";
			$objQuery = mysqli_query($objConnect, $strSQL);
		}
	}

	echo "Save Done.  Click <a href='listRecord.php'>here</a> to view.";

mysqli_close($objConnect);
?>
</body>
</html>
