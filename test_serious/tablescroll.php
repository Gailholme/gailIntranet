<html>
<head>
<title>PHP & MySQL Tutorial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>
  <body>
  <?php include 'config.php';
  $objConnect = mysqli_connect($host,$user,$password,$database) or die("Error Connect to Database");
  	mysqli_set_charset($objConnect, "utf8");
  //$objDB = mysqli_select_db("registration");

  /*** list ***/
  $strSQL = "SELECT * FROM employees";
  $objQuery = mysqli_query($objConnect, $strSQL) or die ("Error Query [".$strSQL."]");

  ?>
  <div>
  <table class= "scroll">
    <thead>
    <tr >
      <th width="91" > <div align="center">Name</div></th>
      <th width="98"> <div align="center">NickName </div></th>
  	<th width="97"> <div align="center">phone number </div></th>
      <th width="198" > <div align="center">department </div></th>
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
</body>
</html>

<style>
table.scroll {
    width: 100%;
    border-spacing: 0;
    border: 2px solid black;
}

table.scroll th,
table.scroll td,
table.scroll tr,
table.scroll thead,
table.scroll tbody { display: block; }

table.scroll thead tr {
    /* fallback */
    width: 97%;
    /* minus scroll bar width */
    width: -webkit-calc(100% - 16px);
    width:    -moz-calc(100% - 16px);
    width:         calc(100% - 16px);
}

table.scroll tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

table.scroll tbody {
    height: 100px;
    overflow-y: auto;
    overflow-x: hidden;
}

table.scroll tbody td,
table.scroll thead th {
    width: 19%;
    float: left;
    border-right: 1px solid black;
}

thead tr th {
    height: 30px;
    line-height: 30px;
    /*text-align: left;*/
}

tbody { border-top: 2px solid black; }

tbody td:last-child, thead th:last-child {
    border-right: none !important;
}
</style>

<script>

// Change the selector if needed
var $table = $('table'),
    $bodyCells = $table.find('tbody tr:first').children(),
    colWidth;

// Get the tbody columns width array
colWidth = $bodyCells.map(function() {
    return $(this).width();
}).get();

// Set the width of thead columns
$table.find('thead tr').children().each(function(i, v) {
    $(v).width(colWidth[i]);
});
</script>
