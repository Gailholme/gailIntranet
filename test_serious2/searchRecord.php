<html>
<head>
<title>PHP & MySQL Tutorial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/customize.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>




      <!-- test filter form end -->
<form name="frmSearch" method="get" > <!--action="?php echo $_SERVER['SCRIPT_NAME'];?>"-->
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php  echo (isset($_GET["txtKeyword"])) ?  $_GET["txtKeyword"] : "";?>">  <!--value="?php echo $_POST["txtKeyword"];?> -->
      <input type="submit" value="Search" action="action.php"></th>
    </tr>
  </table>
</form>
<div>
  <?php include 'action.php'; ?>
</div>
</body>
</html>
