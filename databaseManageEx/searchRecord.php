<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php include 'config.php';
if($_GET["txtKeyword"] != "")
	{
	$strInput = $_GET["txtKeyword"];
	$objConnect = mysqli_connect($host,$user,$password, $database) or die("Error Connect to Database");
	//$objDB = mysqli_select_db("registration");
	// Search By Name
	//$strSQL = "SELECT * FROM professor WHERE (pname LIKE '%".$strInput."%' )";
	$strSQL = "SELECT * FROM student LEFT JOIN takes ON student.student_id = takes.student_id
	LEFT JOIN course ON takes.cid = course.cid WHERE (name LIKE '%".$strInput."%') ORDER BY name ASC";
	$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">
	  <tr>
    <th width="98"> <div align="center">Name </div></th>
    <th width="98"> <div align="center">Course_id </div></th>
	    <th width="98"> <div align="center">Title </div></th>
    <th width="98"> <div align="center">Sec</div></th>
    <th width="98"> <div align="center">Semester </div></th>
	<th width="97"> <div align="center">Year </div></th>
    <th width="198"> <div align="center">Grade </div></th>
	  </tr>
	<?php
	while($objResult = mysqli_fetch_array($objQuery))
	{
	?>
	  <tr>
    <td><?php echo $objResult["name"];?></td>
	<td><?php echo $objResult["cid"];?></td>
		<td><div align="center"><?php echo $objResult["title"];?></div></td>
	<td><div align="center"><?php echo $objResult["sect_id"];?></div></td>
	<td><div align="center"><?php echo $objResult["semester"];?></div></td>
    <td><div align="center"><?php echo $objResult["year"];?></div></td>
	<td><div align="center"><?php echo $objResult["grade"];?></div></td>
	  </tr>
	<?php
	}
	?>
	</table>
	<?php
	mysqli_close($objConnect);
}
?>
</body>
</html>
