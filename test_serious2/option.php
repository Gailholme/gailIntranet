<?php include 'config.php';

	//$strInput = $_GET["txtKeyword"];
	$objConnect = mysqli_connect($host,$user,$password, $database) or die("Error Connect to Database");
	mysqli_set_charset($objConnect, "utf8");
	//$objDB = mysqli_select_db("registration");
	// Search By Name
	//$strSQL = "SELECT * FROM professor WHERE (pname LIKE '%".$strInput."%' )";
//	$strSQL = "SELECT * FROM student LEFT JOIN takes ON student.student_id = takes.student_id
	$strSQL = "SELECT dname  FROM department";
	$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");

  ?>
  <?php 	while($objResult = mysqli_fetch_array($objQuery))
  	{ ?>

    <option> <?php echo $objResult["dname"]?> </option>

  <?php } ?>
