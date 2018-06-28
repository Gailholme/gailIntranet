<html>
<title>Seach Contact </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/customize.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- include bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<hr />

<body>

  <!-- contact-------------------->
  <div>
    <h2 class="w3-left">Contacts</h2>
  </div>
  <!-- test filter form -->
  <!-- ref :https://silviomoreto.github.io/bootstrap-select/examples/-->
  <div class="w3-row-padding">


    <!-- search box----------------------->
    <div class="w3-container">
      <form name = "frmSearch" method = "get" class="w3-container w3-card-4">
        <h2>Input Form</h2>
        <!--
        <div class="w3-section">
        <input class="w3-input" type="text" required>
        <label>Name</label>
      </div>-->
      <!-- search for keyword-->
      <div class="w3-section"> <h3>Keyword</h3>
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?php  echo (isset($_GET["txtKeyword"])) ?  $_GET["txtKeyword"] : "";?>">  <!--value="?php echo $_POST["txtKeyword"];?> -->
      <!--value="?php echo $_POST["txtKeyword"];?> -->
      <br />
    </div>
      <!-- inputbox-->
      <!--<div class="w3-third">
      <input class="w3-input w3-border" type="text" placeholder="One">
    </div>
  -->
  <!--<div class="w3-section">
  <input class="w3-input" type="text" required>
  <label>Email</label>
  </div> -->
  <!-- categories-->


  <div class="w3-section">
    <h3>Department</h3>
    <select class="w3-select " name="option">

      <option>All</option>
      <option>
        <?php include "option.php"; ?>
      </option>
    </select>

    <select class="w3-select" name="option">

      <option>All</option>
      <option>
        <?php include "option.php"; ?>
      </option>
    </select>
    <br />
  </div>
  <br />
  <div class="w3-section">
    <input  type="submit" value="Search" action="action.php" class="w3-btn w3-blue">
  </div>
  </form>
  <div>
      <?php include 'action.php'; ?>
  </div>

  <iframe height= "300px" <?php include 'action.php'; ?> src ="action.php" class="w3-container" scrolling="yes">

  </iframe>


  </div>
  </div>
  <!-- test php search table from database (with iframe)-->
  <br />

</body>

</html>
