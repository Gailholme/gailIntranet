<!DOCTYPE html>
<html>
<head>


  <title>Mainpage</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type = "text/css"href="css/theme.css">
  <link rel="stylesheet" type = "text/css" href="css/customize.css">
  <!--include css from original -->
<!--  <link rel="stylesheet" type="text/css"  href="css/original.css" /> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- include bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <hr />

  <!-- Note:  this script will mainly use w3.css as the mainframework and use bootstrap as the additional framework for some additional components
  that w3.css does not have-->
</head>
<body>
  <!--<center> in case want to layout like the old page-->
  <!-- Side Navigation -->
  <nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
    <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
    <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
    <a href="#" class="w3-bar-item w3-button">Link 4</a>
  </nav>
  <!-- !PAGE CONTENT! -->
  <div class="w3-content" style="max-width:1500px">
    <!-- Header -->
    <header class="w3-container   w3-padding" id="myHeader">
      <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-simple"></i>
      <!-- login box -------------------------------------------------->
      <div class="w3-container w3-light-gray ">
        <div class = "w3-right w3-panel ">

          <form  name= "login1" method="post" action="check_login.php" >
            Username:
            <input name="txtUsername" type="text" id="txtUsername">

            password:
            <input input name="txtPassword" type="password" id="txtPassword">

            <input class="w3-btn w3-black"type="submit" name = "Submit" value="login"  >
          </form>
        </div>
      </div>
      <hr />
      <!-- header name-->
      <div class="w3-center">
        <h1 class="w3-xxxlarge w3-animate-bottom">ASIAWEALTH</h1>
        <h4>Intranet System </h4>
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
<!--
<div class ="">
-->

  <!--Top Block Starts -->
  <!--
  <div id="company_block">
    <div>
        <div class="top_menu">
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

                                          -->
                                          <!--
                                          </div> -->
                                          <!--Top Block Ends -->

                                        </header>
                                        <!-- header name end --------------------------------------------------------->
                                        <!-- navigation menu -->
                                        <div class="w3-bar w3-theme">
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
                                        </div>
                                        <hr />

                                        <!-- buttons (3 button/row)---------------->
                                        <header class="w3-container w3-left w3-white">
                                          <h2>Services</h2>
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
                                      <div >
                                        <center>
                                          <table width=100% class="w3-container w3-center ">
                                            <tr >
                                              <td  onclick="alert('Hello World!')" class ="square w3-round-xlarge text_center" >

                                              </td>
                                              <td class ="square w3-round-xlarge">
                                                <input type="image" src="./assets/minion.png" class ="button"onclick="alert('Hello World!')" />
                                              </td>
                                              <td class ="square w3-round-xlarge">
                                              </td>

                                              <td class ="square w3-round-xlarge">
                                              </td>
                                            </tr>
                                          </table>
                                        </center>
                                      </div>
                                      <!-- buttons (4 button/row) end-------->
                                      <hr />
                                      <!-- buttons ( 3 button/row)---------------->
                                      <!--<div >
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

                      </div> -->

                      <!-- buttons (3 buttons/row)---------------->
                      <!--
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

      </div> -->
      <!-- buttons (3 buttons/row)---------------->



      <!-- test bootstrap grid-->
      <!--  <div class="container-fluid">
      <div class="row">

      <div  class ="col-sm-4 square2 w3-round-xlarge">
    </div>
    <div  class ="col-sm-4 square2 w3-round-xlarge">
  </div>
  <div class =" col-sm-4 square2 w3-round-xlarge">
</div>
</div>

</div>-->

<!-- buttons ( less important function)end------------>

<!-- Container (Services Section)  (bootstrap grid)-->
<!--
<div id="services" class="container-fluid text-center">
<h2>SERVICES</h2>
<h4>What we offer</h4>
<br>
<div class="row slideanim">
<div class="col-sm-4">

<span class =" glyphicon glyphicon-off logo-small square2 button w3-round-xlarge text_center btn btn-default btn-lg" onclick="alert('Hello World!')" >
<input type="image" src="./assets/minion.png" class ="button"/>
</span>
</div>
<div class="col-sm-4">
<span class =" glyphicon glyphicon-off logo-small square2 button w3-round-xlarge text_center btn btn-default btn-lg" onclick="alert('Hello World!')" >
<input type="image" src="./assets/minion.png" class ="button"/>
</span>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-lock logo-small"></span>
<h4>JOB DONE</h4>
<p>Lorem ipsum dolor sit amet..</p>
</div>
</div>
<br><br>
<div class="row slideanim">
<div class="col-sm-4">
<span class="glyphicon glyphicon-leaf logo-small"></span>
<h4>GREEN</h4>
<p>Lorem ipsum dolor sit amet..</p>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-certificate logo-small"></span>
<h4>CERTIFIED</h4>
<p>Lorem ipsum dolor sit amet..</p>
</div>
<div class="col-sm-4">
<span class="glyphicon glyphicon-wrench logo-small"></span>
<h4 style="color:#303030;">HARD WORK</h4>
<p>Lorem ipsum dolor sit amet..</p>
</div>
</div>
</div>
-->
<!-- container service selection end-->


<!-- picture
<div>
<center>
<table width = "100%"  class = "w3-container">
<tr >
<td>
<input type="image" src="./assets/minion.png" class ="button"onclick="alert('Hello World!')" />
</td>
<td>
<input type="image" src="./assets/minion.png"class ="button" onclick="alert('Hello World!')" />
</td>
<td >
<input type="image" src="./assets/minion.png"class ="button" onclick="alert('Hello World!')" />
</td>
</tr>
<hr />
</table>
</center>
</div>-->


<!--
<div class="w3-row">
<div class="w3-col m3  w3-center square"></div>
<div class="w3-col m3  w3-center square"></div>
<div class="w3-col m3  w3-center sqaure"></div>
</div>-->



<!-- test card-->
<!--
<div class="w3-container w3-center">
<hr>
<h3>Paper-like Cards with Shadows</h3>
</div>

<div class="w3-row-padding">

<div class="w3-third">
<div class="w3-card">
<img src="./assets/minion.png" alt="Car" style="width:100%;">
<div class="w3-container">
<p>w3-card</p>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
<img src="./assets/minion.png" alt="Car" style="width:100%">
<div class="w3-container">
<p>w3-card-4</p>
</div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
<img src="./assets/minion.png" alt="Car" style="width:100%">
<div class="w3-container">
<p>w3-card-4</p>
</div>
</div>
</div>
</div>!-->
<!-- test card end-->

<hr />
<!-- buttons end------------>
<!-- contact-------------------->
<div>
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
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Footer</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
    <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
  </footer>
  </html>

  <!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
  <script>
  // alert // debug
  function alerting(){
    alert("Hello! I am an alert box!");
  }
  // Side navigation
  function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
  }
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }

  // Tabs
  function openCity(evt, cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    var activebtn = document.getElementsByClassName("testbtn");
    for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-dark-grey";
  }

  var mybtn = document.getElementsByClassName("testbtn")[0];
  mybtn.click();

  // Accordions
  function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

  // Slideshows
  var slideIndex = 1;

  function plusDivs(n) {
    slideIndex = slideIndex + n;
    showDivs(slideIndex);
  }

  function showDivs(n) {
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
  }

  showDivs(1);

  // Progress Bars
  function move() {
    var elem = document.getElementById("myBar");
    var width = 5;
    var id = setInterval(frame, 10);
    function frame() {
      if (width == 100) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + '%';
        elem.innerHTML = width * 1  + '%';
      }
    }
  }
  </script>
  <!--</center>- in case you want to adjust it to layout like the old page->
</body>

</html>
