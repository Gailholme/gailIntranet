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
	<a href="main.php">logout</a>
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
	<div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align w3-large">

			<!-- username box -------------------------------------------------->
		<div class="w3-container  w3-right">

					<p>
						Welcome to User Page! &nbsp; 	<?php echo $objResult["Name"];?> &nbsp;&nbsp;&nbsp;
							<a class="w3-btn w3-black w3-right" href="main.php">logout</a>
					</p>


			</div>

			<!-- username box end ------>
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-amber w3-theme-d2 " href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>
			<a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-amber">Team</a>
			<a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-amber">Work</a>

			<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-amber">Contact</a>
			<div class="w3-dropdown-hover w3-hide-small">
				<button class="w3-button w3-hover-amber" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>
				<div class="w3-dropdown-content w3-card-4 w3-bar-block">
					<a href="#" class="w3-bar-item w3-button">Link</a>
					<a href="#" class="w3-bar-item w3-button">Link</a>
					<a href="#" class="w3-bar-item w3-button">Link</a>
				</div>
			</div>
		</div>

	</div>

	<!-- !PAGE CONTENT! -->
	<div class="w3-content" style="max-width:1500px">
		<!-- Header -->
		<header class="w3-container   w3-padding" id="myHeader">



			<!-- header name-->
			<div class="w3-center w3-left w3-container">
				<h1 class="w3-xxxlarge w3-animate-bottom">Intranet System</h1>
				<h4> </h4>
			</div>



			<!-- Image Header -->

			<!--
			<div class="w3-display-container w3-animate-opacity">
			<img src="assets/sailboat.jpg" alt="boat" style=";min-height:350px;max-height:600px;">
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


	<h2>Internal Application</h2>
	<br />


	<!--	<div class="w3-half">
	<span class ="w3-section square2 w3-round-xlarge">Place_holder </span>
</div>

<div class=" w3-half">
<span class ="square2 w3-round-xlarge">Place_holder</span>
</div> -->

<div >
	<center>
		<table width=100% class="w3-container w3-center ">
			<tr >
				<td class ="square2 button w3-round-xlarge text_center btn btn-default btn-lg" onclick="alert('Hello World!')" >
					<input type="image" src="./assets/minion.png" class ="button"/>
				</td>
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
</div>

<!-- buttons (3 button/row)---------------->

<hr />


<!-- The Grid -->
<div class="w3-row w3-container  w3-row-padding">
	<!-- Left Column -->
	<div class="w3-col l2">
		<!-- Profile -->
		<div class="w3-card w3-round w3-white w3-margin-top">
			<div class="w3-container">
				<h4 class="w3-center">My Profile</h4>
				<p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
				<hr>
				<p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
				<p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
				<p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>


			</div>
		</div>
		<br>

		<!-- Accordion -->
		<div class="w3-card w3-round">
			<div class="w3-white">
				<button onclick="myFunction('Demo1')" class="w3-button w3-hover-amber w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
				<div id="Demo1" class="w3-hide w3-container">
					<p>Some text..</p>
				</div>
				<button onclick="myFunction('Demo2')" class="w3-button w3-hover-amber w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
				<div id="Demo2" class="w3-hide w3-container">
					<p>Some other text..</p>
				</div>
				<button onclick="myFunction('Demo3')" class="w3-button w3-hover-amber w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
				<div id="Demo3" class="w3-hide w3-container">
					<div class="w3-row-padding">
						<br>
						<div class="w3-half">
							<img src="/w3images/lights.jpg" style="" class="w3-margin-bottom">
						</div>
						<div class="w3-half">
							<img src="/w3images/nature.jpg" style="" class="w3-margin-bottom">
						</div>
						<div class="w3-half">
							<img src="/w3images/mountains.jpg" style="" class="w3-margin-bottom">
						</div>
						<div class="w3-half">
							<img src="/w3images/forest.jpg" style="" class="w3-margin-bottom">
						</div>
						<div class="w3-half">
							<img src="/w3images/nature.jpg" style="" class="w3-margin-bottom">
						</div>
						<div class="w3-half">
							<img src="/w3images/snow.jpg" style="" class="w3-margin-bottom">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




		<!-- End Left Column -->


	<div class=" w3-col l10 m8 ">

		<!-- grid test-->

		<!-- Blog entries -->
		<div class="w3-col l5 s12">
		  <!-- Blog entry -->
		  <div class="w3-card-4 w3-margin w3-white">

		    <div class="w3-container">
		      <h3><b>Forum</b></h3>
		      <h5>Latest Update: <span class="w3-opacity">April 7, 2014</span></h5>
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

		    <div class="w3-container">
		      <h3><b>CALENDAR</b></h3>
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
		<div class="w3-col l7">
			<div class="w3-card-4">
				<div class="w3-container">
		      <h3><b>Annoucement</b></h3>

		    </div>

				  <!-- About Card -->
		  <div class="w3-card w3-margin w3-margin-top">

		    <div class="w3-container w3-white">
		      <h4><b>My Name</b></h4>
		      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
		    </div>
		  </div><hr>

		  <!-- Posts -->
		  <div class="w3-card w3-margin">

		    <div class="w3-container w3-padding">
		      <h4> Posts</h4>
		    </div>
         <div class="scrolling">


		    <ul class="w3-ul w3-hoverable w3-white">
		      <li class="w3-padding-16">
		        <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
		        <span class="w3-large">Lorem</span><br>
		        <span>Sed mattis nunc</span>
		      </li>
		      <li class="w3-padding-16">
		        <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
		        <span class="w3-large">Ipsum</span><br>
		        <span>Praes tinci sed</span>
		      </li>
		      <li class="w3-padding-16">
		        <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
		        <span class="w3-large">Dorum</span><br>
		        <span>Ultricies congue</span>
		      </li>
		      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
		        <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
		        <span class="w3-large">Mingsum</span><br>
		        <span>Lorem ipsum dipsum</span>
		      </li>
					<li class="w3-padding-16 w3-hide-medium w3-hide-small">
					 <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
					 <span class="w3-large">Mingsum</span><br>
					 <span>Lorem ipsum dipsum</span>
				 </li>
				 <li class="w3-padding-16 w3-hide-medium w3-hide-small">
					 <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
					 <span class="w3-large">Mingsum</span><br>
					 <span>Lorem ipsum dipsum</span>
				 </li>
				 <li class="w3-padding-16 w3-hide-medium w3-hide-small">
					 <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
					 <span class="w3-large">Mingsum</span><br>
					 <span>Lorem ipsum dipsum</span>
				 </li>
		    </ul>
			</div>
			</div>


		  <hr>


		</div>
		<!-- END Introduction Menu -->
		</div>

</div>
</div>


<!-- Grid test 2 -->

<div class="w3-row">

<!-- END GRID -->
</div><br>


	<!-- Middle Column -->
	<!--	<div class="w3-col w3-row-padding l9 w3-container">

	<div class="w3-row-padding w3-half">
	<div class="w3-col m12">
	<div class="w3-card w3-round w3-white">
	<div class="w3-container w3-padding">
	<h6 class="w3-opacity">Social Media template by w3.css</h6>
	<p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
	<button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>
</div>
</div>
</div>
</div>
</div> -- >
<!--End Grid -->



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
				<iframe width="100%" scrolling="yes" height="260px" frameborder="0" align="middle" src="./branch.html"></iframe>
			</span>
		</div>
	</div>
	<!--Left Block Ends -->
	<!--  News content end---------------------->
</div>


<div class ="w3-row-padding" >
	<div class="w3-half">


<!-- test php search table from database (with iframe)-->
<br />
<!-- php table from database : employees-->

<div class="w3-container w3-Card ">

	<iframe height= "300px" width = "100%"src="./searchRecord.php" scrolling="yes">

	</iframe>
	<!-- php table from database : employees end-->
</div>
</div>
<br />

<!--test php search table from database end-->
<div class="w3-half">


<div class="w3-container  w3-card ">

	<iframe height= "300px" width = "100%"src="./searchRecord.php"  scrolling="yes">

	</iframe>
	<!-- php table from database : employees end-->
</div>
</div>
</div>


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
<footer class="w3-container w3-theme-dark w3-padding-16">
	<h3>Footer</h3>
	<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
	<div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
		<span class="w3-text w3-theme-light w3-padding">Go To Top</span>
		<a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
			<i class="fa fa-chevron-circle-up"></i></span></a>
		</div>
		<span>
			<a href="/">Home</a> <span>|</span>
			<a href="http://setsmart.domain.local:8080" target="_blank">SETSMART</a> <span>|</span>
			<a href="/Service/RedirectToService?serviceAuthenticationType=E_FINANCE&amp;serviceCode=E-Finance" target="_blank">E-FINANCE </a><span>|</span>
			<a href="/PCLive" target="_blank">Research Online </a><span>|</span>
			<a href="/OrderMatch/OrderList">Contra Broker</a><span>|</span>
			<a href="http://custkm/REFERENCE/" target="_blank">SMART System</a> <span>|</span>
			<a href="/Home/DocumentList">Documents</a><span>|</span>
			<a href="/Documents/AWS Phone List.pdf" target="_blank">Tel</a>
		</span>


		<p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
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
