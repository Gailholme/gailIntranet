<html>
<head>
<title>PHP & MySQL Tutorial</title>
</head>
<body>
<?php include 'config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
//$objDB = mysqli_select_db("registration");
$strSQL = "SELECT * FROM employees";
$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<div class="w3-responsive w3-card-4">
<table width="60" border="1" class= "w3-table w3striped w3-bordered">
  <thead>
  <tr class="w3-theme">
    <th width="91"> <div align="center">Name</div></th>
    <th width="98"> <div align="center">NickName </div></th>
	<th width="97"> <div align="center">phone number </div></th>
    <th width="198"> <div align="center">department </div></th>
  </tr>
</thead>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
<tbody>
  <tr class="w3-white">
    <td><div align="center"><?php echo $objResult["name"];?></div></td>
    <td><?php echo $objResult["nickname"];?></td>
    <td><div align="center"><?php echo $objResult["phone_number"];?></div></td>
	<td><?php echo $objResult["dname"];?></td>
  </tr>
</tbody>
<?php
}
?>
</table>
<?php
mysqli_close($objConnect);
?>
</div>
</body>
</html>
