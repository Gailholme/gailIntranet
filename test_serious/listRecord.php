<html>
<head>
<title>PHP & MySQL Tutorial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/customize.css">
</head>
<body>
<?php include 'config.php';
$objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
	mysqli_set_charset($objConnect, "utf8");
//$objDB = mysqli_select_db("registration");

/*** list ***/
$strSQL = "SELECT * FROM employees";
$objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");

?>
<div class="w3-responsive w3-card-4">

<table  border="1" class= "w3-table w3striped w3-bordered">
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
