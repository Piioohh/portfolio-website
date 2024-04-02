<!DOCTYPE html>
<html>
<head>
<title>Dash Touch</title>
    <link rel="icon" type="image/x-icon" href="http://localhost/ourpartners/images/turkiz.jpg" sizes="100x100"><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
      <a href="about.php" class="w3-bar-item w3-button w3-grey"><i class="fa fa-users"></i> ABOUT US</a>
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

<!-- Header with full-height image -->
<header class="au-1 w3-display-container w3-grayscale-min" style="padding:128px 16px" id="home">
  <div class="w3-display-left w3-text-black w3-center" style="padding:48px">
    <h1 class="w3-center"><b>DASH TOUCH SDN BHD<b></h1>
    <h3 class="w3-center">Manufacturing the best machine</h3>
    <p><a onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">About Us</a></p>
  </div> 
</header>

<div id="id01" class="modal">
    <div class="modal-content w3-center" style="padding: 128px">
      <div class="modal-body">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <img src="images/abo1.jpg" width="70%">
        <p>Established in 2006 , Dash Touch Solutions is one of the leading business of Self-Service Kiosk provider and Service Support Services . Despite pioneer in Self-Service business solutions, we also does have provided nationwide support, integrated professional services and etc. of Industrial I.T sector businesses . As our mission is to provide kiosk and solutions integration to the end client needs.</p>
      </div>
    </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="au-2 w3-display-container w3-grayscale-min" style="padding:128px 16px">
  <div class="w3-display-right w3-text-black w3-center" style="padding:48px">
    <h1 class="w3-center"><b>DESIGN PHILOSOPHY<b></h1>
    <h3 class="w3-center">Daily Life Friendly Design</h3>
    <p><a onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">See More</a></p>
  </div>
</div>

<div id="id03" class="modal">
    <div class="modal-content w3-center" style="padding: 64px">
      <div class="modal-body">
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h3 class="w3-padding-16 w3-text-teal">DASHTOUCH DESIGN INNOVATION</h3>
        <p>This is our in-house creative department based in Bandar Sunway,Selangor , where all our Kiosk Producs are designed. With our diverse experience, the team often starts with the consumer insights before moving on to creative solutions. Through this creative process, the team bridges consumer needs & want with the high-tech products.</p>
        <h3 class="w3-padding-16 w3-text-teal">DESIGN PRINCIPLE</h3>  
        <img src="images/abo3.jpg" width="60%">
      </div>
    </div>
</div>

<!-- About Section -->
<div class="au-3 w3-display-container w3-grayscale-min" style="padding:128px 16px">
  <div class="w3-display-left w3-text-black w3-center" style="padding:48px">
    <h1 class="w3-center"><b>OUR HISTORY<b></h1>
    <h3 class="w3-center">Going Further Since 2012</h3>
    <p><a onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">EXPERIENCE MORE</a></p>
  </div>
</div>

<div id="id04" class="modal">
    <div class="modal-content w3-center" style="padding: 40px">
      <div class="modal-body">
        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <h3 class="w3-padding-16 w3-text-teal">OUR STORY</h3>  
        <p class="w3-padding-16">Established in 2012, DashTouch has been providing self-service kiosks, touch screen products and custom kiosks manufacturing for the last 10 years.</p>
        <p class="w3-padding-16">Despite being a relatively young company, we have already secured a place in the F & B, industrial, financial, government and multi-media fields. Our current products are built to meet the increasing needs of industry and whatever your company's needs we can build to suit them as well.</p>
        <p class="w3-padding-16">Dedicated to researching and developing Kiosk solutions, With the world’s best specialists and engineer working hand-in-hand, we strongly believe that we can achieve our mission and make our vision a reality.</p>
        <p class="w3-padding-16">"Being a custom Kiosk maker Malaysia, we strive to expand our knowledge and diversify our expertise globally, with the aim to make the world  easy lifestyle place to live in." Our unique competitive advantage is that we complement our high-tech products with an innovative and modern design. In todays world, the design of a product plays a major role in decision-making, thus prompted us to take that extra effort to deliver not just practical, but innovative design touches.</p>
        <p class="w3-padding-16">Through the years, we have progressively improved our Research & Development process with new findings and the way self-services being use behaviours. Simply said, this is our playground, we wont stop until we achieve our vision.</p>
      </div>
    </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="au-4 w3-display-container w3-grayscale-min" style="padding:128px 16px">
  <div class="w3-display-center w3-text-black w3-center" style="padding:48px">
    <h1 class="w3-center w3-text-white"><b>SUCCESSFUL PARTNERS<b></h1>
    <p><a onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">SEE MORE</a></p>
  </div>
</div>

<div id="id05" class="modal">
    <div class="modal-content w3-center">
      <div class="modal-body">
        <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <!-- Features Section -->
        
          <h1 class="w3-jumbo"><b>OUR PARTNERS:</b></h1>

          <div class="w3-row" style="margin-top:64px">
            <div class="w3-col s3">
              <img src="images/1.png" width="30%">
            </div>
            <div class="w3-col s3">
              <img src="images/2.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/3.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/4.png" width="30%">
            </div>
          </div>

          <div class="w3-row" style="margin-top:64px">
            <div class="w3-col s3">
            <img src="images/5.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/6.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/7.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/8.png" width="30%">
            </div>
          </div>
          
          <div class="w3-row" style="margin-top:64px">
            <div class="w3-col s3">
            <img src="images/9.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/10.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/11.png" width="30%">
            </div>
            <div class="w3-col s3">
            <img src="images/12.png" width="30%">
            </div>
          </div>
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
