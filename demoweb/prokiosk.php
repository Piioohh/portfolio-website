<!DOCTYPE html>
<html>
<head>
<title>Dash Touch</title>
    <link rel="icon" type="image/x-icon" href="http://localhost/ourpartners/images/turkiz.jpg" sizes="100x100">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<style>
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: black; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
</style>
</head>
<body>

<div class="loader">
      <img src="load-gif.gif" alt="">
</div>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide"><img src="images/logo4.jpg" class="logo"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">DASH TOUCH</a>
      <div class="dropdown w3-dropdown-hover">
        <a href="product.php"><button class="dropbtn w3-button w3-grey"><i class="fa fa-chevron-down"></i> PRODUCT</button></a>
        <div class="dropdown-content w3-dropdown-content w3-bar-block w3-card-4">
          <div class="row">
            <div class="column w3-hover-grayscale">
              <a href="prokiosk.php">
              <h3>Kiosk</h3>
              <img src="images/pro1.jpg" alt="" width="100%">
              </a>
            </div>
            <div class="column w3-hover-grayscale">
              <a href="prosoft.php">
              <h3>Software Services</h3>
              <img src="images/pro2.jpg" alt="" width="100%">
              </a>
            </div>
            <div class="column w3-hover-grayscale">
              <a href="prosupp.php">
              <h3>Support Services</h3>
              <img src="images/bgpro6.jpg" alt="" width="100%">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown w3-dropdown-hover">
        <a href="dashlife.php"><button class="dropbtn w3-button"><i class="fa fa-th"></i> SOLUTIONS</button></a>
        <div class="dropdown-content w3-dropdown-content w3-bar-block w3-card-4">
          <div class="row">
            <div class="columnh w3-center">
              <a href="incu.php">
                <h3>EDUCATION</h3>
                <img src="images/whiter1.jpg" alt="" width="100%">
              </a>
            </div>
            <div class="columnh w3-center">
            <a href="iuv.php">
                <h3>F&B</h3>
                <img src="images/whiter2.png" alt="" width="100%">
              </a>
            </div>
            <div class="columnh w3-center">
              <a href="gov.php">
                <h3>GOVERNMENT</h3>
                <img src="images/whiter3.png" alt="" width="100%">
              </a>
            </div>
            <div class="columnh w3-center">
              <a href="mall.php">
                <h3>MALL</h3>
                <img src="images/whiter4.png" alt="" width="100%">
              </a>
            </div>
            <div class="columnh w3-center">
              <a href="mosque.php">
                <h3>MOSQUE</h3>
                <img src="images/whiter5.png" alt="" width="100%">
              </a>
            </div>
          </div>
        </div>
      </div>
      <a href="about.php" class="w3-bar-item w3-button"><i class="fa fa-users"></i> ABOUT US</a>
      <a href="contactus.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT US</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">DASH TOUCH</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCT</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">DASH LIFE</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a>
  <a href="contactus.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
</nav>

<div class="w3-row w3-display-container w3-light-blue w3-grayscale-min" style="padding:128px 160px">
    <header>
	<h2 class="w3-center">Type of Kiosk</a></h2>
	</header>
    <br>
    <br>
    <div class="w3-third w3-container w3-center">
      
            <img class="w3-img w3-hover-opacity" src="images/k1.png" onclick="onClick(this)" style="width:50%">
            <h2>Recarding Kiosk</h2>
            <br>
        
    </div>

    <div class="w3-third w3-container w3-center">
        
            <img class="w3-img w3-hover-opacity" src="images/k2.png" onclick="onClick(this)" style="width:50%">
            <h2>POS System Kiosk</h2>
            <br>
        
    </div>

    <div class="w3-third w3-container w3-center">
        
            <img class="w3-img w3-hover-opacity" src="images/k3.png" onclick="onClick(this)" style="width:50%">
            <h2>Directory Kiosk</h2>
            <br>
        
    </div>
    
    <div class="w3-third w3-container w3-center">
      
            <img class="w3-img w3-hover-opacity" src="images/k4.png" onclick="onClick(this)" style="width:50%">
            <h2>Self Service Kiosk</h2>
        
    </div>

    <div class="w3-third w3-container w3-center">
        
            <img class="w3-img w3-hover-opacity" src="images/k5.png" onclick="onClick(this)" style="width:50%">
            <h2>Digital Signage</h2>
        
    </div>

    <div class="w3-third w3-container w3-center">
        
            <img class="w3-img w3-hover-opacity" src="images/k6.png" onclick="onClick(this)" style="width:50%">
            <h2>QMS Kiosk</h2>
        
    </div>
    
</div>

<!-- Projects 
<div class="w3-row w3-display-container w3-green w3-grayscale-min" style="padding:128px 160px">
<div id="projects" class="w3-container w3-padding-32 w3-center">
<h2 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h2>
</div>

<div class="w3-row-padding">

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-display-container">
  <div class="w3-display-bottomleft w3-black w3-padding">Summer</div>
  <img class="w3-img w3-hover-opacity" src="images/k1.png" alt="House" onclick="onClick(this)" style="width:100%">
</div>
</div>

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-display-container">
  <div class="w3-display-bottomleft w3-black w3-padding">Brick House</div>
  <img src="images/k2.png" alt="House" style="width:100%">
</div>
</div>

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-display-container">
  <div class="w3-display-bottomleft w3-black w3-padding">Renovated</div>
  <img src="images/k3.png" alt="House" style="width:100%">
</div>
</div>

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-display-container">
  <div class="w3-display-bottomleft w3-black w3-padding">Barn House</div>
  <img src="images/k4.png" alt="House" style="width:100%">
</div>
</div>

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-display-container">
  <div class="w3-display-bottomleft w3-black w3-padding">Summer</div>
  <img src="images/k5.png" alt="House" style="width:99%">
</div>
</div>

<div class="w3-col l3 m6 w3-margin-bottom">
<div class="w3-display-container">
  <div class="w3-display-bottomleft w3-black w3-padding">Brick House</div>
  <img src="images/k6.png" alt="House" style="width:99%">
</div>
</div>

</div>

</div>-->

<div class="w3-row" >
  <div class="w3-half container" style="padding: 0 0">
    <img src="images/pro2.jpg" width="100%">
    <div class="bottom-left w3-text-white">
    <p><a href="prosoft.php" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">Future Begin Here</a></p>
    </div>
  </div>
  <div class="w3-half container"  style="padding: 0 0">
    <img src="images/bgpro6.jpg" width="100%">
    <div class="bottom-right w3-text-black">
    <p><a href="prosupp.php" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">Future Begin Here</a></p>
    </div>
  </div>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image" width="400">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Before Footer -->
<div class="w3-row w3-light-blue w3-grayscale-min">
    <div class="w3-quarter w3-container w3-center w3-padding-64 w3-hover-opacity">
        <a href="contactus.php#contact">
        <img class="w3-image w3-hover-opacity" src="images/icon1.png" width="50" height="50">
        <div class="w3-container">
        <h3><b>MESSAGE US</b></h3>
        </div></a>
    </div>
    <div class="w3-quarter w3-container w3-center w3-padding-64  w3-hover-opacity">
        <a href="https://wa.me/60143610488">
        <img class="w3-image w3-hover-opacity" src="images/icon2.png" width="50" height="50">
        <div class="w3-container">
        <h3><b>CONTACT US</b></h3>
        </div></a>
    </div>
    <div class="w3-quarter w3-container w3-center w3-padding-64  w3-hover-opacity">
        <a href="contactus.php">
        <img class="w3-image w3-hover-opacity" src="images/icon3.png" width="50" height="50">
        <div class="w3-container">
        <h3><b>LOCATE US</b></h3>
        </div></a>
    </div>
    <div class="w3-quarter w3-container w3-center w3-padding-64  w3-hover-opacity">
        <a href="javascript:void(0)" onclick="document.getElementById('subscribe').style.display='block'">
        <img class="w3-image w3-hover-opacity" src="images/bellnoti.png" width="50" height="50">
        <div class="w3-container">
        <h3><b>SUBSCRIBE</b></h3>
        </div></a>
    </div>
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-padding-large">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join our mailing list to receive updates on available dates and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <br>
      <a href="mailto:marketing@dashtouch.com" class="w3-button w3-padding-large w3-green w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-teal w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-tiktok w3-hover-opacity"></i>
  </div>
  <p>All Right Reserved <a href="https://www.dashtouch.com/" title="W3.CSS" target="_blank" class="w3-hover-text-green">Dash Touch Solutions</a></p>
</footer>

<script>
        var loader = document.querySelector(".loader")

        window.addEventListener("load", vanish);

        function vanish() {
            loader.classList.add("disppear");
        }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>
