<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
<?php include '../config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
//$objDB = mysqli_select_db("registration");
$strSQL = "DELETE FROM student ";
$strSQL .="WHERE student_id = '".$_GET["StudentID"]."' ";
$strSQL .="and name = '".$_GET["Name"]."' ";
$strSQL .="and year = '".$_GET["Year"]."' ";
$strSQL .="and email = '".$_GET["Email"]."' ";

$objQuery = mysqli_query($objConnect, $strSQL);
if($objQuery)
{
	echo "Record Deleted.";
}
else
{
	echo "Error Delete [".$strSQL."]";
}
mysqli_close($objConnect);
?>
</body>
</html>