<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'trans');
   if (mysqli_connect_errno()) {
    echo "Грешка: Не може да се воспостави конекција со базата.";
    exit;
 }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ТрансБус</title>
    <meta charset="utf-8">
      
      
      
      <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="shortcut icon" href="/images/icon.ico.png" type="image/x-icon">
<link rel="icon" href="images/icon.ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	     <span class="create"><img src="images/icon.ico.png" width="100" height="100"/></span>
	      <a class="navbar-brand" href="home.html"> <font size="20" color="white">ТрансБус</font></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Почетна
	      </button>

	                <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="home.php" class="nav-link">Почетна</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">За нас</a></li>
              <li class="nav-item"><a href="avtobuskiStanici.php" class="nav-link">Автобуски станици</a></li>
       <li class="nav-item"><a href="moi_rez.php" class="nav-link">Мои резервации</a></li>
              <li class="nav-item active"><a href="contact_h.php" class="nav-link">Контакт</a></li>	    
                    <li class="nav-item"><a href="index.html" class="nav-link">Одјави се</a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"> <?php echo $_SESSION["username"]; ?>  </a></li>
	      </div>
	    </div>
	  </nav>
      
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/5.gif');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
  
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Контакт</h1>
          </div>
        </div>
      </div>
    </div>
          
		<section class="ftco-section">
      <div class='container col-lg-7 col-md-9 col-sm-12'> 

        <p><h1> Потребна ви е помош? </h1><hr>
Контактирајте не на нашата е-пошта каде што нашите стручни лица ќе одговорат на вашите прашања и ќе ви помогнат во работата со било кој дел од порталот.</p>


<i style="font-size:80px" class="fa">&#xf003;</i>
            <h4> Email адреси: </h4><br>
             stefanija.102059@student.ugd.edu.mk  <br>
             kristina.102066@student.ugd.edu.mk <br>
             kostadinka.102060@student.ugd.edu.mk <br>
             valerija.102061@student.ugd.edu.mk <br>

            
            <div class="google-maps">
<iframe width="700" height="500" src="gmaps.html" frameborder="0" scrolling="0"></iframe>
</div> 
            </div>
          </section>
      </nav>
      
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
           
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Сите права се задржани</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
    </body>
</html>
