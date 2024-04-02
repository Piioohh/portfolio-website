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
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

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
    <a href="../index.php" class="w3-bar-item w3-button w3-wide"><img src="images/logo4.jpg" class="logo"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button w3-grey">DASH TOUCH</a>
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
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-15 w3-display-container w3-grayscale-min">
        <div class="w3-display-bottommiddle w3-text-white w3-center" style="padding:48px">
            <p><a href="#home" class="w3-button w3-nofill w3-border w3-border-teal w3-round-xlarge w3-large">Future Begin Here</a></p>
        </div> 
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </header>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-center" style="padding:128px 16px" id="home">
    <img class="w3-img" src="images/dash logo 4.png" width="26%">
    </header>

    <!-- About Section -->
    <div class="bgimg-6 w3-display-container w3-image" style="padding:128px 100px" id="about">
        <div class="w3-display-left w3-text-black w3-center w3-hide" style="padding:48px">
            <img class="w3-img" src="images/number1.png" width="45%">  
            <h1 class="w3-center"><b>Kiosk and Services Provider<b></h1>
            <h1 class="w3-center"><b>in Malaysia<b></h1>
        </div>
    </div>

    <!-- About Section -->
    <div class="bgimg-12 w3-display-container w3-image" style="padding:128px 100px" id="about">
        <div class="w3-display-left w3-text-black w3-center w3-hide" style="padding:48px">
            <img class="w3-img" src="images/number1.png" width="45%">  
            <h1 class="w3-center"><b>Kiosk and Services Provider<b></h1>
            <h1 class="w3-center"><b>in Malaysia<b></h1>
        </div>
    </div>

    <!-- About Section -->
    <div class="bgimg-13 w3-display-container w3-image" style="padding:128px 100px" id="about">
        <div class="w3-display-left w3-text-black w3-center w3-hide" style="padding:48px">
            <img class="w3-img" src="images/number1.png" width="45%">  
            <h1 class="w3-center"><b>Kiosk and Services Provider<b></h1>
            <h1 class="w3-center"><b>in Malaysia<b></h1>
        </div>
    </div>

    <!-- Promo Section - "We know design" -->

    <section class="product" style="padding:100px 16px"> 
        <h2 class="product-category w3-center">Customized Kiosk</h2>
        <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
        <div class="product-container w3-center">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">FnB</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori2.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Recarding</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori3.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Digital Signage</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori4.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Digital Signage</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori5.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Payment Kiosk</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori6.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Photobooth</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/hori7.jpg" class="product-thumb" alt="">
                    <button class="card-btn">see more</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">QMS</h2>
                </div>
            </div>
        </div>
    </section>    

    <!-- Sliding Logo -->
    <div class="w3-container w3-row w3-center w3-grey" style="padding:128px 16px">
        <h1 class="w3-x-large w3-hide-small"><b> OUR CLIENT</b></h1><br>
        <div class="customer-logos">
            <div class="slide w3-center"><img src="images/1.png"></div>
            <div class="slide w3-center"><img src="images/2.png"></div>
            <div class="slide w3-center"><img src="images/3.png"></div>
            <div class="slide w3-center"><img src="images/4.png"></div>
            <div class="slide w3-center"><img src="images/5.png"></div>
            <div class="slide w3-center"><img src="images/6.png"></div>
            <div class="slide w3-center"><img src="images/7.png"></div>
            <div class="slide w3-center"><img src="images/8.png"></div>
            <div class="slide w3-center"><img src="images/9.png"></div>
            <div class="slide w3-center"><img src="images/10.png"></div>
            <div class="slide w3-center"><img src="images/11.png"></div>
        </div>
    </div>
    
    <!-- Skills Section -->
    <div class="w3-container w3-padding-64">
        <div class="w3-row-padding">
            <div class="w3-col m6">
            <h3>Our Skills.</h3>
            <p>The more we give importance to skill development, the more competent will be our youth.</p>
            <p>The future belongs to those who learn more skills and combine them in creative ways</p>
            </div>
            <div class="w3-col m6">
            <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Kiosk Customization & Maintainance</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Software</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
            </div>
            <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Support</p>
            <div class="w3-grey">
                <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
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

    <script>
    
    $(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 900,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
    });

    </script>
    <script>
    // slide product

    const productContainers = [...document.querySelectorAll('.product-container')];
    const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
    const preBtn = [...document.querySelectorAll('.pre-btn')];

    productContainers.forEach((item, i) => {
        let containerDimensions = item.getBoundingClientRect();
        let containerWidth = containerDimensions.width;

        nxtBtn[i].addEventListener('click', () => {
            item.scrollLeft += containerWidth;
        })

        preBtn[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth;
        })
    })
    </script>

    <script src="js/main.js"></script>



</body>
</html>