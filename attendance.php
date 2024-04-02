<!DOCTYPE html>
<html>
<head>
<title>Pioh Portfolio</title>
<link rel="icon" type="image/x-icon" href="images/pageico.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/styles/default.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/propic.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PORTFOLIO</b></h4>
    <p class="w3-text-grey">Muhammad Afiq Bin Mamsor</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-phone fa-fw w3-margin-right"></i>0189433310</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-map fa-fw w3-margin-right"></i>SELANGOR</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>afiqmamsor26@gmail.com</a>
  </div>
  <br>
  <div class="w3-center">
  <a href="index.php" class="w3-button w3-black w3-round-xxlarge">Back</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="images/propic.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>My Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
    </div>
    </div>
  </header>
  
  <h2 class="w3-center">Attendance System</h2>

  <div class="w3-content w3-display-container">
    <img class="mySlides" src="images/at1.jpg" style="width:100%">
    <img class="mySlides" src="images/at2.jpg" style="width:100%">
    <img class="mySlides" src="images/at3.jpg" style="width:100%">
    <img class="mySlides" src="images/at4.jpg" style="width:100%">
    <img class="mySlides" src="images/at5.jpg" style="width:100%">
    <img class="mySlides" src="images/at6.jpg" style="width:100%">
    <img class="mySlides" src="images/at7.jpg" style="width:100%">
    <img class="mySlides" src="images/at8.jpg" style="width:100%">
    <img class="mySlides" src="images/at9.jpg" style="width:100%">
    <img class="mySlides" src="images/at10.jpg" style="width:100%">
    <img class="mySlides" src="images/at11.jpg" style="width:100%">
    <img class="mySlides" src="images/at12.jpg" style="width:100%">

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  </div>

  <div style="margin-left:40px">
    <p>Features:-</p>
    <p>-Come in two panels (Admin/Staff)</p>
    <p>-Simple design for small business use and user frienly.</p>
    <p>-Funtioning for HR to capture employees attendance.</p>
    <p>-Digital leave management system for employee and employer.</p>
  </div>
  <hr>

  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
