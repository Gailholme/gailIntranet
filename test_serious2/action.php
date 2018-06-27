<?php include 'config.php';
if(isset($_GET["txtKeyword"]))
	{
  $strInput = isset($_GET["txtKeyword"]) ? $_GET["txtKeyword"] : '';
	//$strInput = $_GET["txtKeyword"];
	$objConnect = mysqli_connect($host,$user,$password, $database) or die("Error Connect to Database");
		mysqli_set_charset($objConnect, "utf8");
	//$objDB = mysqli_select_db("registration");
	// Search By Name
	//$strSQL = "SELECT * FROM professor WHERE (pname LIKE '%".$strInput."%' )";
//	$strSQL = "SELECT * FROM student LEFT JOIN takes ON student.student_id = takes.student_id
	$strSQL = "SELECT * FROM employees WHERE(name LIKE '%".$strInput."%' OR nickname  LIKE '%".$strInput."%' OR phone_number  LIKE '%".$strInput."%' OR dname  LIKE '%".$strInput."%') ORDER BY name ASC";
	/*FROM student LEFT JOIN takes ON student.student_id = takes.student_id
	LEFT JOIN course ON takes.cid = course.cid WHERE (name LIKE '%".$strInput."%') ORDER BY name ASC*/
	$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">
	  <tr>
    <th width="98"> <div align="center">Name </div></th>
    <th width="98"> <div align="center">Nickname</div></th>
	    <th width="98"> <div align="center">phone_number </div></th>
    <th width="98"> <div align="center">dname</div></th>
	  </tr>
	<?php
	while($objResult = mysqli_fetch_array($objQuery))
	{
	?>
	  <tr>
    <td><?php echo $objResult["name"];?></td>
	<td><?php echo $objResult["nickname"];?></td>
		<td><div align="center"><?php echo $objResult["phone_number"];?></div></td>
	<td><div align="center"><?php echo $objResult["dname"];?></div></td>

	  </tr>
	<?php
	}
	?>
	</table>
	<?php
	mysqli_close($objConnect);
}
else{
  include "listRecord.php";
}
?>
