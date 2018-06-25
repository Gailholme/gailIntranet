<html>
<head>
<title>PHP & MySQL Tutorial</title>
<!-- include bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
background-color: #bdc3c7;
}

.table-fixed {
width: 100%;
background-color: #f3f3f3;
}
.table-fixed tbody {
height: 50px;
overflow-y: auto;
width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
display: block;
}
.table-fixed tbody td {
float: left;
}
.table-fixed thead tr th {
float: left;
background-color: #f39c12;
border-color: #e67e22;
}
</style>
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
<div class="container">

<table  border="1" class= "table table-fixed">
  <thead>
  <tr clas="">
    <th class="col-xs-2"> <div align="center">Name</div></th>
    <th class="col-xs-2"> <div align="center">NickName </div></th>
	<th class="col-xs-2"> <div align="center">phone number </div></th>
    <th class="col-xs-6"> <div align="center">department </div></th>
  </tr>
</thead>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
<tbody>
  <tr>
    <td class="col-xs-2"><div align="center"><?php echo $objResult["name"];?></div></td>
    <td class="col-xs-2"><?php echo $objResult["nickname"];?></td>
    <td class="col-xs-2"><div align="center"><?php echo $objResult["phone_number"];?></div></td>
	<td class="col-xs-6"><?php echo $objResult["dname"];?></td>
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
