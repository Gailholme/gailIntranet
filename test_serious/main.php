<!DOCTYPE html>
<html>
<title>Mainpage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./w3.css">
<link rel="stylesheet" href="./theme.css">
<link rel="stylesheet" href="./customize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
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

  <!-- Header -->
  <header class="w3-container w3-theme w3-padding" id="myHeader">
    <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-simple"></i>
    <!-- login box -------------------------------------------------->
    <div class="w3-container">
      <div class = "w3-right">

        <form >
          Username:
          <input type="text" name="firstname" value="">

          password:
          <input type="text" name="lastname" value="">

          <input type="submit" value="login">
        </form>
      </div>
    </div>
    <!-- -Header name ----------------------------->
    <div class="w3-center">
      <h1 class="w3-xxxlarge w3-animate-bottom">ASIAWEALTH</h1>
      <h4>Intranet System </h4>
    </div>

  </header>
  <hr>
  <!-- header name end --------------------------------------------------------->

  <!-- test php table from database------------------------------------------------------->
  <div>
    <?php include 'listRecord.php'; ?>
  </div>
  <!-- test php table from database   end  -------------------------------->
  <!-- buttons------------------>
  <hr>
  <div>
    <center>
    <table width = "100%"  class = "w3-container">
      <tr>
        <td>
        <input type="image" src="./assets/minion.png" class ="button"onclick="alert('Hello World!')" />
      </td>
      <td>
        <input type="image" src="./assets/minion.png"class ="button" onclick="alert('Hello World!')" />
      </td>
      <td>
        <input type="image" src="./assets/minion.png"class ="button" onclick="alert('Hello World!')" />
      </td>
    </tr>
      <tr>
        <td colspan="1.5">  <a class="w3-button w3-theme">Button</a></td>
        <td colspan="1.5">    <a class="w3-button w3-theme">Button</a></td>
      </tr>

    </table>
  </center>
  </div>

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



<!-- buttons end------------>

<!-- test iframe-->
<div class="w3-container">
  <table>
    <iframe src="https://htmlcolorcodes.com/" height="200" width="30%"></iframe>
  </div>
  <!-- test iframe end-->

  <!-- News content -------------------------------------------------------------------------->
  <div id="content_block">
    <!--Left Block Starts -->
    <div id="left_block">

      <span>
        <iframe width="30%" scrolling="yes" height="450" frameborder="0" align="middle" src="http://www.asiawealth.co.th/th/news_activities_feed.php"></iframe>
      </span>
      </div
      <!--Left Block Ends -->
      <!--  News content end--------------------------------------------------------------------->

      <!-- table ---------------------------------------------------------->
      <div class="w3-container">
        <hr>
        <div class="w3-center">
          <h2>Tables</h2>
          <p w3-class="w3-large">Don't worry. W3.CSS takes care of your tables.</p>
        </div>
        <div class="w3-responsive w3-card-4">
          <table class="w3-table w3-striped w3-bordered">
            <thead>
              <tr class="w3-theme">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Points</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
              </tr>
              <tr class="w3-white">
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
              </tr>
              <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>67</td>
              </tr>
            </tbody>
          </table>
        </div>

        <hr>
        <h2 class="w3-center">Forms and Lists</h2>
      </div>

      <div class="w3-row-padding">

        <div class="w3-half">
          <form class="w3-container w3-card-4">
            <h2>Input Form</h2>
            <div class="w3-section">
              <input class="w3-input" type="text" required>
              <label>Name</label>
            </div>
            <div class="w3-section">
              <input class="w3-input" type="text" required>
              <label>Email</label>
            </div>
            <div class="w3-section">
              <input class="w3-input" type="text" required>
              <label>Subject</label>
            </div>

            <div class="w3-row">
              <div class="w3-half">
                <input id="milk" class="w3-check" type="checkbox" checked="checked">
                <label>Milk</label>
                <br>
                <input id="sugar" class="w3-check" type="checkbox">
                <label>Sugar</label>
                <br>
                <input id="lemon" class="w3-check" type="checkbox" disabled>
                <label>Lemon (Disabled)</label>
                <br><br>
              </div>

              <div class="w3-half">
                <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
                <label>Male</label>
                <br>
                <input id="female" class="w3-radio" type="radio" name="gender" value="female">
                <label>Female</label>
                <br>
                <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
                <label> Don't know (Disabled)</label>
              </div>
            </div>
          </form>
        </div>
        <div class="w3-half">
          <div class="w3-card-4 w3-container">
            <h2>Lists</h2>
            <ul class="w3-ul w3-margin-bottom">
              <li>Jill</li>
              <li>Eve</li>
              <li>Adam</li>
            </ul>
            <br>
            <ul class="w3-ul w3-border w3-hoverable">
              <li class="w3-theme">Jill</li>
              <li>Eve</li>
              <li>Adam</li>
              <li>Steve</li>
            </ul>
            <br>
          </div>
        </div>
      </div>
      <hr>


      <!-- Footer -->
      <footer class="w3-container w3-theme-dark w3-padding-16">
        <h3>Footer</h3>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
          <span class="w3-text w3-theme-light w3-padding">Go To Top</span> 
          <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
            <i class="fa fa-chevron-circle-up"></i></span></a>
          </div>
          <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
        </footer>

        <!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
        <script>
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
