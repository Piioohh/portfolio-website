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
        <a href="product.php"><button class="dropbtn w3-button"><i class="fa fa-chevron-down"></i> PRODUCT</button></a>
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
        <a href="dashlife.php"><button class="dropbtn w3-button w3-grey"><i class="fa fa-th"></i> SOLUTIONS</button></a>
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

<header class="w3-display-container" style="margin: 80px 50px">
  <img class="w3-round-large" src="images/gov1.jpg" style="width:100%">
</header>

<div class="w3-row w3-dark-grey w3-center" style="padding:128px 160px">
  <div class="w3-half">
    <header>
        <h1 class="w3-center w3-text-teal"><b>SMART RETAIL SOLUTIONS</h1>
        </header>
        <h3>
            Self-Service Kiosk			
        </h3>
        <h3>
            Large Display Screen
        </h3>
        <h3>
            Video Wall & Digital Signage
        </h3>
        <h3>
            Smart Locker
        </h3>
  </div>
  <div class="w3-half">
        <header>
        <h1 class="w3-center w3-text-teal"><b>Professional Service</h1>
        </header>
        <h3>
        Customization Self-Service Kiosk Nationwide Support Industrial I.T Businesses			
        </h3>
  </div> 

</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 class="w3-text-teal">SELF-SERVICE KIOSK</h1>
      <h5 class="w3-padding-8">Everything will be much easier with self-service kiosk which at this modern era, people tends to settle up their things in a short time period.</h5>
      <h5 class="w3-padding-8">This technology consists of a touchscreen with a user-friendly digital interface that displays information, printing a documents or even guides user to use the system precisely.</h5>
    </div>

    <div class="w3-third w3-center">
      <img class="w3-img w3-padding-64" src="images/gov2.jpg" width="100%">
    </div>
  </div>
</div>

<!-- About Section -->
<div class="w3-container" style="padding:64px 164px" id="about">
  <h1 class="w3-center w3-text-teal"><b>Functions :</b></h1>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-third">
      <img src="images/gov3.jpg" width="100%">
      <p>Printing forms and any important document</p>
    </div>
    <div class="w3-third">
    <img src="images/gov4.jpg" width="100%">
      <p>Check any application status or payment due</p>
    </div>
    <div class="w3-third">
    <img src="images/gov5.jpg" width="100%">
      <p>Reporting a problems and surveys</p>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-third w3-center" style="padding:128px 16px">
      <img class="w3-img" src="images/gov6.png" width="90%">
    </div>

    <div class="w3-twothird w3-padding-64">
      <h1 class="w3-text-teal">PAYMENT KIOSK</h1>
      <h5 class="w3-padding-16">Secure transactional solution through which users can make payments for various products and services through specified payment methods. While the concept of a payment kiosk is seemingly straightforward, the functionalities of payment kiosks can vary based on the businesses.</h5>
      <h5 class="w3-padding-16">We do provide a full solutions for self-service payment kiosk which more people can use cashless method to settle their settlement and payment due. This also is a good moves and encourage Malaysian and even foreigner to use the system.</h5>
    </div>
  </div>
</div>

<!-- Third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-twothird w3-padding-64">
      <h1 class="w3-text-teal">QUEUEING MANAGEMENT SYSTEM</h1>
      <h5 class="w3-padding-16">Don't keep the customers waiting!! Reduce the time by making a good queueing management system with us.</h5>
      <p>• Reduce walkaways</p>
      <p>• Increase customer lifetime value</p>
      <p>• Reduce negative perceptions of wait times</p>
      <p>• No more long queue</p>
      <h5 class="w3-padding-16">Controls physical lines and minimizes the customers' waiting period <b>NOW!</b></h5>
    </div>

    <div class="w3-third w3-center">
      <img class="w3-img w3-padding-64" src="images/gov7.jpg" width="90%">
    </div>
  </div>
</div>

<div class="w3-container w3-light-grey" style="padding:64px 160px" id="contact">
  <h1 class="w3-center w3-text-teal">INFORMATION / DIRECTORY KIOSK</h1>
  <p class="w3-center w3-large">Interactive Kiosk are suitable for various applications including shopping mall directory, building directory as well as for information purpose</p>
  <div style="margin-top:48px">
    <!-- Image of location/map -->
    <img src="images/gov10.jpg" class="w3-image w3-round-large" style="width:100%">
  </div>
</div>

<div class="w3-container w3-light-grey w3-center" style="padding:12px 160px" id="contact">
  <p class="w3-center w3-large">The Directory content may need to have the proper navigation information :</p>
  <div style="margin-top:48px">
    <p>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">INFORMATIONAL</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">DIRECTIONAL</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">IDENTIFICATION</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">REGULATORY</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">ADSVERTISEMENT</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">PROMOTING SERVICE</button>
    </p>
  </div>
</div>

<!-- 4 Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-32 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img class="w3-img" src="images/gov9.jpg" width="90%">
    </div>

    <div class="w3-twothird">
      <h5 class="w3-padding-16">• Customer or visitors can identify or to get the actual location spot within the building itself by using Directory kiosk for navigation</h5>
      <h5 class="w3-padding-16">• The Directory kiosk can be as high end content direction guidance via "Way- Finding" function which able to accurately guide from Point to Point</h5>
    </div>
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
