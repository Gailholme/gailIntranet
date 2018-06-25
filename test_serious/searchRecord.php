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



  <!-- test filter form -->
  <!-- ref :https://silviomoreto.github.io/bootstrap-select/examples/-->
  <div class="w3-row-padding">

  <div class="w3-half">
    <form class="w3-container w3-card-4">
      <h2>Input Form</h2>
      <!--
      <div class="w3-section">
        <input class="w3-input" type="text" required>
        <label>Name</label>
      </div>-->

        <div class="w3-section">Search
        <input name="txtKeyword" type="text"=id="txtKeyword" class="w3-input"
        value="<?php  echo (isset($_GET["txtKeyword"])) ?  $_GET["txtKeyword"] : "";?>">  <!--value="?php echo $_POST["txtKeyword"];?> -->
        <input type="submit" value="Search" action="action.php" class="w3-btn w3-blue"></th>
      </div>

      <!-- test php table from database------------->

      <!-- test php table from database   end  -------------------------------->
  </br>
      <div class="w3-third">
      <input class="w3-input w3-border" type="text" placeholder="One">
    </div>
      <!--<div class="w3-section">
        <input class="w3-input" type="text" required>
        <label>Email</label>
      </div> -->
      <div class="w3-section">
        <select class="w3-select" name="option">
        <optgroup label="Picnic">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </optgroup>
        <optgroup label="Camping">
          <option>Tent</option>
          <option>Flashlight</option>
          <option>Toilet Paper</option>
        </optgroup>
      </select>
    </br>
      <select class="w3-select" name="option">
      <optgroup label="Picnic">
        <option>Mustard</option>
        <option>Ketchup</option>
        <option>Relish</option>
      </optgroup>
      <optgroup label="Camping">
        <option>Tent</option>
        <option>Flashlight</option>
        <option>Toilet Paper</option>
      </optgroup>
    </select>
  </div>
    <button class="w3-btn w3-blue">Register</button></p>
    <div>
    <?php // include 'action.php'; ?> 
    </div>
    </form>


  </div>
  </div>
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
