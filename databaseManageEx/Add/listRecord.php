<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
<?php include '../config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
//$objDB = mysql_select_db("registration");
$strSQL = "SELECT * FROM professor";
$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Professor ID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Salary </div></th>

  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["pid"];?></div></td>
    <td><?php echo $objResult["pname"];?></td>
    <td><?php echo $objResult["salary"];?></td>

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
