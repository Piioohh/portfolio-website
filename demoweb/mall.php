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

<header class="w3-display-container w3-center" style="margin: 80px 50px">
  <img class="w3-round-large" src="images/mall.jpg" style="width:90%">
</header>

<div class="w3-display-container w3-dark-grey w3-center" style="padding:128px 260px">
  
  <header>
	<h1 class="w3-center w3-text-teal"><b>SMART RETAIL SOLUTIONS</h1>
	</header>
		<section>
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
      <br>
    <div class="w3-display-bottommiddle w3-text-white w3-center" style="padding:48px">
        <p><a href="#product" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">View Solution</a></p>
    </div> 

</div>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 class="w3-text-teal">DIGITAL SIGNAGE</h1>
      <h5 class="w3-padding-8">Digital Signage Solutions is a perfect solution to all kinds of retailers or merchant to advertise their marketing messages or ay of the digital content across the retail environment to any of the visitors</h5>
      <h5 class="w3-padding-8">This is the main technology on how the digital content to blast out to any of the display screen in order to capture any target visitor audience to encourage them to attract or to purchase any of the product promotion item</h5>
    </div>

    <div class="w3-third w3-center">
      <img class="w3-img w3-padding-64" src="images/mall2.png" width="60%">
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img class="w3-img" src="images/mall3.png" width="90%">
    </div>

    <div class="w3-twothird w3-padding-64">
      <p class="w3-text-grey">• Non-touch display</p>
      <p class="w3-text-grey">• Advertising and marketings</p>
      <p class="w3-text-grey">• Replace your poster and signboard</p>
      <p class="w3-text-grey">• Ideal for shopping mall, government lobby, exhibition and restaurant</p>    
      <p class="w3-text-grey">• Easily update content on digital signs from anywhere with an internet connection</p>
      <p class="w3-text-grey">• Enhance your customers' experience</p>
      <p class="w3-text-grey">• Eliminate the recurring costs associated with printing and shipping new static signs</p>
    </div>
  </div>
</div>

<!-- Third Grid -->
<div class="w3-container w3-center" style="padding:64px 164px" id="about">
  <h1 class="w3-center w3-text-teal"><b>VIDEO WALL</b></h1>
  <h5>Video Wall is a total solution that consist of multiple display screen to output display a digital content into a larger screen. Most videowall systems are designed to be durable and active for longer periods of time. Eye catching video wall can attract audiences and huge impact on customers purchasing decisions.</h5>
  <img src="images/mall4.png" width="50%">
  <div class="w3-row-padding w3-center">
    <div class="w3-quarter">
      <p class="w3-large w3-text-red">Super Narrow Bezel</p>
      <p>Ultra narrow bezel size that creates immersive and seamless viewing experiences on assembled video wall screens</p>
    </div>
    <div class="w3-quarter">
      <p class="w3-large w3-text-red">LED Backlight</p>
      <p>Anti-burn, intelligent screen protection and typically more durable than other commercial-grade backlight display</p>
    </div>
    <div class="w3-quarter">
      <p class="w3-large w3-text-red">IPS Technology</p>
      <p>Superior image quality and provides more uniform color reproduction and greater viewing angles</p>
    </div>
    <div class="w3-quarter">
      <p class="w3-large w3-text-red">Flexible Configuration</p>
      <p>With an integrated video matrix processor, no additional hardware is required to tile to any configuration</p>
    </div>
  </div>
</div>

<!-- 4 Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img class="w3-img" src="images/mall5.jpg" width="90%">
    </div>

    <div class="w3-twothird">
      <h3><b>LCD Specification</b></h3>
      <p class="w3-text-grey">• Panel Size : 32” / 43” / 50” / 55” (16:9)</p>
      <p class="w3-text-grey">• Brigthness : 500cd/m</p>
      <p class="w3-text-grey">• Resolution : 1920 x 1080</p>
      <p class="w3-text-grey">• Backligth  : LED</p>    
      <p class="w3-text-grey">• Power : 300W</p>
      <p class="w3-text-grey">• Color : 16.7M</p>
    </div>
  </div>
</div>

<div class="w3-container" style="padding:64px 160px" id="contact">
  <h1 class="w3-center w3-text-teal">DIRECTORY KIOSK</h1>
  <p class="w3-center w3-large">The usage of the Directory kiosk is where to provide a special services digital content to the visitor where mainly is to navigate them from Location A to B with the help of interactive screen kiosk system.</p>
  <p class="w3-center w3-large">Besides provide the interactive services , the Directory kiosk is also able to provide some information of any of the retail or location event to be happening.</p>
  <div style="margin-top:48px">
    <!-- Image of location/map -->
    <img src="images/gov10.jpg" class="w3-image w3-round-large" style="width:100%">
  </div>
  <br>
  <br>
  <p class="w3-center w3-large">The Directory content may need to have the proper navigation information :</p>
  <div style="margin-top:48px" class="w3-center">
    <p>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">INFORMATIONAL</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">DIRECTIONAL</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">IDENTIFICATION</button>
        <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">REGULATORY</button>
    </p>
  </div>

</div>


<!-- 6 Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-third w3-center w3-padding-64">
      <img class="w3-img " src="images/mall7.png" width="90%">
    </div>

    <div class="w3-twothird w3-padding-64">
      <h1 class="w3-text-teal">MEMBERSHIP CARD</h1>
      <h5 class="w3-padding-16">In today era of digital payment or digitalization of security, membership card or any of the EMV Cards will need to have a tighter security features ,and one of the feature which is expiry date of the cards to ensure the owner of the card to renew their cards as soon as possible.</h5>
      <h5 class="w3-padding-16">With using the self service solutions for instant issuing card kiosk ,customer will easily to get replacement or new card by approach to the self-service kiosk, with using the kiosk, ultimately it will speed up the routine time, reduce delays and improve the queue process.</h5>
    </div>
  </div>
</div>

<!-- 7 Grid -->
<div class="w3-row-padding w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-twothird">
    <h1 class="w3-text-teal">PRIVILEGED CARD</h1>
      <h5 class="w3-padding-8">Due to popularity demand of the Privilege card are commonly require for any occasion such as :</h5>
      <p class="w3-text-grey">• Membership Card</p>
      <p class="w3-text-grey">• Marketing Card</p>
      <p class="w3-text-grey">• Staff Card</p>
      <p class="w3-text-grey">• Payment Card (VISA/MASTER Card)</p>
      <h5 class="w3-padding-8">With our experience of create solutions for instant issuing card kiosk , customer will easily to get replacement or new card by approach to the self-service kiosk</h5>
    </div>

    <div class="w3-third w3-center">
      <img class="w3-img w3-padding-64" src="images/mall8.png" width="69%">
    </div>
  </div>
</div>

<!-- 8 Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container w3-center">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img class="w3-img w3-padding-64" src="images/mall9.jpg" width="100%">
    </div>

    <div class="w3-twothird w3-padding-64">
      <h1 class="w3-text-teal">PAYMENT KIOSK</h1>
      <h5 class="w3-padding-16">An all-in-one Open Payment Solution powered by EMV & PCI-approved software accepts credit cards, Debit cards, e-wallets and QR payments that comply with touchless contactless and NFC technologies. It also can provide user to pay their parking ticket.</h5>
    </div>
  </div>

  <img class="w3-round-large" src="images/mall10.png" style="width:50%">  
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
