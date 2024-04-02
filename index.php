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
<style>

html {
    scroll-behavior: smooth;
  }
</style>

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
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT ME</a> 
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
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
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/web1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Attendance & Leave System</b></p>
        <p>Develop this web app while doing internship with Dash Touch SDN BHD. This web application is to replace old ways and make HR work easier.</p>
        <a href="attendance.php" class="w3-button w3-black w3-round-xxlarge">See More...</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/web2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Support System</b></p>
        <p>This web application is an existing appicaton from the company and i have been assigned to maintain and develop new features to the wesite.</p>
        <a href="support.php" class="w3-button w3-black w3-round-xxlarge">See More...</a>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="images/web3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Customer Support Ticketing System</b></p>
        <p>A web application to assist the job of technical support team leader at my company for the maintenance project.</p>
        <a href="ticket.php" class="w3-button w3-black w3-round-xxlarge">See More...</a>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/web4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Company Website</b></p>
        <p>A development of a new mordenize website for the company and still in progress.</p>
        <a href="webb.php" class="w3-button w3-black w3-round-xxlarge">See More...</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/k1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Hardware Maintenance (Technical Support)</b></p>
        <p>Doing technical support work in the internship period</p>
        <a href="kiosk.php" class="w3-button w3-black w3-round-xxlarge">See More...</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/react1.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>ReactJS Simple Project</b></p>
        <p>Creating Simple project using React JS</p>
        <a href="react.php" class="w3-button w3-black w3-round-xxlarge">See More...</a>
      </div>
    </div>
  </div>


  <!-- Images of Me -->

  <div class="w3-container w3-padding-large" id="about" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>
    <p>My name is Muhammad Afiq. I'm a fresh graduate of UiTM with a bachelor degree in Science Computer & Mathematics. I’m a Web App Engineer at Dash Touch Solution SDN BHD and a person with creative approach to problem-solving. I believe that I am skilled in web development, database system management, IT support (software/hardware) and also ready and eager to learn new knowledge.</p>
    <hr>
    
    <h4>Technical Skills</h4>
    <!-- Progress bars / Skills -->
    <p>Web Development</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:65%">65%</div>
    </div>
    <p>Database Management</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:60%">60%</div>
    </div>
    <p>IT Support (Softwware/Hardware)</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:50%">50%</div>
    </div>
    <p>
      <button class="w3-button w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom" id="GetFile">
        <i class="fa fa-download w3-margin-right">Download Resume</i>
      </button>
    </p>
    <hr>
  </div>

  
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$('#GetFile').on('click', function () {
    $.ajax({
        url: 'images/resume.pdf',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'afiqresume.pdf';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
        }
    });
});
</script>

</body>
</html>
