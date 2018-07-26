<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
  <
<?php include 'config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
//$objDB = mysqli_select_db("registration");
$strSQL = "SELECT * FROM student LEFT JOIN takes ON student.student_id = takes.student_id ORDER BY name";
$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">StudentID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="98"> <div align="center">Course_id </div></th>
    <th width="98"> <div align="center">Section_id </div></th>
    <th width="98"> <div align="center">Semester </div></th>
	<th width="97"> <div align="center">Year </div></th>
    <th width="198"> <div align="center">Grade </div></th>
  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["student_id"];?></div></td>
    <td><?php echo $objResult["name"];?></td>
	<td><?php echo $objResult["cid"];?></td>
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
?>
</body>
</html>
