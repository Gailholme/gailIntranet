<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "USER")
	{
		echo "This page for User only!";
		exit();
	}

  $con = mysqli_connect("localhost","gail","password");
  mysqli_select_db($con, 'user') or die(mysqli_error($con));
	$strSQL = "SELECT * FROM member WHERE UserID LIKE '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<html>
<head>
<title>USER page</title>
</head>
<body>

  Welcome to User Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197"><?php echo $objResult["Username"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo $objResult["Name"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit</a><br>
  <br>
  <a href="main.php">Logout</a>
</body>
</html>



<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type = "text/css"href="css/theme.css">
<link rel="stylesheet" type = "text/css" href="css/customize.css">
<!--include css from original -->
<link rel="stylesheet" type="text/css"  href="css/original.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- include bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

	<!-- !PAGE CONTENT! -->
	<div class="w3-content" style="max-width:1500px">
		<!-- Header -->
		<header class="w3-container   w3-padding" id="myHeader">

			<!-- username box -------------------------------------------------->
			<div class="w3-container w3-panel w3-card  w3-white  w3-right">
				<div class=" w3-containerw3-center  w3-xlarge">
					<p >
						Welcome to User Page! &nbsp; 	<?php echo $objResult["Name"];?> &nbsp;&nbsp;
					</p>
				</div>

						<a class="w3-btn w3-black w3-right" href="main.php">Logout</a>
				</div>
				<!-- username box end ------>

				<!-- header name-->
				<div class="w3-center w3-container">
					<h1 class="w3-xxxlarge w3-animate-bottom">Intranet System</h1>
					<h4> </h4>
				</div>



				<!-- Image Header -->

				<!--
				<div class="w3-display-container w3-animate-opacity">
				<img src="assets/sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
			--><!--- text in middle of pics-->
			<!--  <div class="w3-padding w3-display-middle"><div class="w3-center">
			<h1 class="w3-xxxlarge w3-animate-bottom w3-text-indigo">ASIAWEALTH</h1>
			<h3 class= "w3-text-amber">Intranet System </h3>
		</div></div> -->
		<!--<div class="w3-container w3-display-middle w3-margin-bottom">
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS</button>
	</div></div>-->




	<!-- Navbar (sit on top) -->
	<!--
	<div class="w3-top w3-hide-small">
	<div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
	<a href="#" class="w3-bar-item w3-button">HOME</a>
	<a href="#menu" class="w3-bar-item w3-button">MENU</a>
	<a href="#about" class="w3-bar-item w3-button">ABOUT</a>
	<a href="#googleMap" class="w3-bar-item w3-button">CONTACT</a>
</div>
</div>
-->
<!-- nave bar end-->


<div class ="">


	<!--Top Block Starts -->

	<div id="company_block">

		<div>
			<div id = ""class="w3-container w3-left" >
					<a href="/" ><img alt="Asia Wealth Securities Company Limited" height="100" src="./icon/awslogohd.png"
									title="Asia Wealth Securities Company Limited" /></a></div>
			<div class="top_menu w3-container">
				<div class="menu_icon">
					<a href="/Documents/AWS Phone List.pdf" target="_blank">
						<img alt="Telephone" height="50" src="./icon/tel_icon.png" onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
						title="Telephone" /></a></div>
						<div class="menu_icon">
							<a href="/Home/DocumentList">
								<img alt="Document" height="50" src="./icon/document_icon.png" onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
								title="Document" /></a></div>
								<div class="menu_icon">
									<a href="http://smartsales/marwealth/account/login" target="_blank">
										<img alt="MarWealth" height="50" src="./icon/marwealth_icon.png" onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
										title="Marketing Wealth" /></a></div>
										<div class="menu_icon">
											<a href="http://custkm/REFERENCE/" target="_blank">
												<img alt="SmartSystem" height="50" src="./icon/smartsys_icon.png"onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
												title="Smart System" /></a></div>
												<div class="menu_icon">
													<a href="/OrderMatch/OrderList">
														<img alt="ContraBroker" height="50" src="./icon/contra_icon.png" onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
														title="Contra Broker" /></a></div>
														<div class="menu_icon">
															<a href="/PCLive" target="_blank">
																<img alt="ResearchOnline" height="50" src="./icon/research_icon.png" onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
																title="Research Online" /></a></div>
																<div class="menu_icon">
																	<a href="/Service/RedirectToService?serviceAuthenticationType=E_FINANCE&amp;serviceCode=E-Finance" target="_blank">
																		<img alt="EFinance" height="50" src="./icon/efinance_icon.png"onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
																		title="E-Finance" /></a></div>
																		<div class="menu_icon">
																			<a href="/Service/RedirectToService?serviceAuthenticationType=ASPEN&amp;serviceCode=Aspen" target="_blank">
																				<img alt="Aspen" height="50" src="./icon/aspen_icon.png"onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
																				title="Aspen" /></a></div>
																				<div class="menu_icon">
																					<a href="http://setsmart.domain.local:8080" target="_blank">
																						<img alt="SETSmart" height="50" src="./icon/set_icon.png"onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
																						title="Set Smart" /></a></div>
																						<div class="menu_icon">
																							<a href="/" >
																								<img alt="Home" height="50" src="./icon/home_icon.png" onmouseover="hover(this,this.alt);" onmouseout="unhover(this,this.alt);"
																								title="Home" /></a></div>
																							</div>
																						</div>
																					</div>



																				</div>

																				<!--Top Block Ends -->

																				<div  id ="top_block" class="w3-right">

																				</div>





																			<!-- header name end --------------------------------------------------------->
																			<!-- navigation menu -->
																	<!--		<div class="w3-bar w3-theme">
																				<a href="#" class="w3-bar-item w3-button w3-padding-16">Home</a>
																				<a href="#" class="w3-bar-item w3-button w3-padding-16">Link 1</a>
																				<div class="w3-dropdown-hover">
																					<button class="w3-button w3-padding-16">
																						Dropdown <i class="fa fa-caret-down"></i>
																					</button>
																					<div class="w3-dropdown-content w3-card-4 w3-bar-block">
																						<a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
																						<a href="javascript:void(0)" class="w3-bar-item w3-button">Link 2</a>
																						<a href="javascript:void(0)" class="w3-bar-item w3-button">Link 3</a>
																					</div>

																				</div>

																			</div> -->
																			<hr />
																				</header>
                                       <div class="w3-container w3-section">


																				  		<h2>Annoucement</h2>

																				<div class="w3-half">
                                               <span class ="w3-section square2 w3-round-xlarge">Place_holder </span>
																				</div>

																				<div class=" w3-half">
																						<span class ="square2 w3-round-xlarge">Place_holder</span>
																				</div>
																				 </div>
																			<!-- buttons (3 button/row)---------------->


																			<!-- Grid -->
																			<div class="w3-row">

																			<!-- Blog entries -->
																			<div class="w3-col l8 s12">
																			  <!-- Blog entry -->
																			  <div class="w3-card-4 w3-margin w3-white">
																			    <img src="/w3images/woods.jpg" alt="Nature" style= "width:">
																			    <div class="w3-container">
																			      <h3><b>TITLE HEADING</b></h3>
																			      <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
																			    </div>

																			    <div class="w3-container">
																			      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
																			        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
																			      <div class="w3-row">
																			        <div class="w3-col m8 s12">
																			          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
																			        </div>
																			        <div class="w3-col m4 w3-hide-small">
																			          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
																			        </div>
																			      </div>
																			    </div>
																			  </div>
																			  <hr>

																			  <!-- Blog entry -->
																			  <div class="w3-card-4 w3-margin w3-white">
																			  <img src="/w3images/bridge.jpg" alt="Norway" style="width:">
																			    <div class="w3-container">
																			      <h3><b>BLOG ENTRY</b></h3>
																			      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
																			    </div>

																			    <div class="w3-container">
																			      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
																			        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
																			      <div class="w3-row">
																			        <div class="w3-col m8 s12">
																			          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
																			        </div>
																			        <div class="w3-col m4 w3-hide-small">
																			          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
																			        </div>
																			      </div>
																			    </div>
																			  </div>
																			<!-- END BLOG ENTRIES -->
																			</div>

																			<!-- Introduction menu -->
																			<div class="w3-col l4">
																			  <!-- About Card -->
																			  <div class="w3-card w3-margin w3-margin-top">
																			  <img src="/w3images/avatar_g.jpg" style="width:">
																			    <div class="w3-container w3-white">
																			      <h4><b>My Name</b></h4>
																			      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
																			    </div>
																			  </div><hr>




																			<header class="w3-container w3-left w3-white">
																				<h2>Internal Application</h2>
																			</header>

																			<div >
																				<center>
																					<table width=100% class="w3-container w3-center ">
																						<tr >
																							<td class ="square2 button w3-round-xlarge text_center btn btn-default btn-lg" onclick="alert('Hello World!')" >
																								<input type="image" src="./assets/minion.png" class ="button"/>
																							</td>
																							<td class ="square2 w3-round-xlarge">
																							</td>
																							<td class ="square2 w3-round-xlarge">
																							</td>
																						</td>
																					</tr>
																				</table>
																			</center>

																		</div>
																		<hr />



<hr />
<!-- buttons end------------>

<!-- contact-------------------->
<div class="w3-container">
	<h2 class="w3-left">I hate Chickent</h2>
</div>
<hr />

<!-- contact-------------------->
<div class= "w3-container">
	<h2 class="w3-left">Contacts</h2>
</div>
<!-- test filter form -->
<!-- ref :https://silviomoreto.github.io/bootstrap-select/examples/-->
<div class="w3-row-padding">


	<!-- search box----------------------->
	<div class="w3-half">
		<form class="w3-container w3-card-4">
			<h2>Input Form</h2>
			<!--
			<div class="w3-section">
			<input class="w3-input" type="text" required>
			<label>Name</label>
		</div>-->
		<!-- search for keyword-->
		<div class="w3-section"> <h3>Keyword</h3>
			<input name="txtKeyword" type="text"=id="txtKeyword" class="w3-input"
			value="<?php  echo (isset($_GET["txtKeyword"])) ?  $_GET["txtKeyword"] : "";?>">  <!--value="?php echo $_POST["txtKeyword"];?> -->
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
	<select class="w3-select w3-half" name="option">

		<option>All</option>
		<option>
			<?php include "option.php"; ?>
		</option>
	</select>

	<select class="w3-select w3-half" name="option">

		<option>All</option>
		<option>
			<?php include "option.php"; ?>
		</option>
	</select>
	<br />
</div>
</br>
<div class="w3-section">
	<input  type="submit" value="Search" action="action.php" class="w3-btn w3-blue">
</div>
</form>


</div>
<div class="w3-half ">
	<div class ="w3-card-4 w3-container ">
		<h2>สาขา</h2>

		<!--Left Block Starts -->
		<div class="w3-section">
			<span>
				<iframe width="100%" scrolling="yes" height="280px" frameborder="0" align="middle" src="./branch.html"></iframe>
			</span>
		</div>
	</div>
	<!--Left Block Ends -->
	<!--  News content end---------------------->
</div>





<!-- test php search table from database (with iframe)-->
<br />
<!-- php table from database : employees-->
<div class="w3-container ">

	<iframe height= "300px"src="./searchRecord.php" class="w3-half" scrolling="yes">

	</iframe>
	<!-- php table from database : employees end-->
</div>

<!--test php search table from database end-->

<!--tab- open/close -->
<hr />
<!--
<div class="w3-container">

<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 1</button>
<div id="Demo1" class="w3-hide"> -->

<!-- test php table from database------------->
<!--
<div>
<?php// include 'listRecord.php'; ?>
</div>
<!-- test php table from database   end  -------------------------------->
<!--  </div>
</div> -->
<!-- test php table from database   end  -------------------------------->


<!-- test iframe-->
<!--<div class="w3-container">
<table>
<iframe src="https://htmlcolorcodes.com/" height="200" width="30%"></iframe>
</div>-->
<!-- test iframe end-->

<hr />




  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
