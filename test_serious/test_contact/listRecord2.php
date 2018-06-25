<html>
<head>
<title>ThaitestPHP/MySQL (Thai UTF8)</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<?php
	/*** Connect ***/
	include 'config.php';

	$objCon = mysqli_connect($host,$user,$password,$database)or die("Error Connect to Database");;

	mysqli_set_charset($objCon, "utf8");



	/*** List Record ***/
	$strSQL = "SELECT * FROM employees";
	$objQuery = mysqli_query($objCon,$strSQL);
?>
	<table width="498" border="1">
	<tr>
	<th width="87"> <div align="center">name </div></th>
	<th width="145"> <div align="center">nickname </div></th>
	<th width="244"> <div align="center">phone_number </div></th>
		<th width="244"> <div align="center">dname </div></th>
	</tr>
	<?php
	while($objResult = mysqli_fetch_array($objQuery))
	{
	?>
	  <tr>
	    <td><div align="center"><?php echo $objResult["name"];?></div></td>
	    <td><?php echo $objResult["nickname"];?></td>
	    <td><div align="center"><?php echo $objResult["phone_number"];?></div></td>
		<td><?php echo $objResult["dname"];?></td>
	  </tr>
	<?php
	}
	?>
	</table>
	<?php
	mysqli_close($objCon);
	?>

</body>
</html>
