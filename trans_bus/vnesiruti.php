<!DOCTYPE html>
<html lang="en">
    
  <head>
      <meta charset="utf-8">
    <title>ТрансБус</title>
    <meta charset="utf-8">
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
	      <a class="navbar-brand" href="index.html"> <font size="20" color="white">ТрансБус</font></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Почетна
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="ahome.html" class="nav-link">Почетна</a></li>
	          <li class="nav-item active"><a href="vnesiruti.php" class="nav-link">Внеси рути</a></li>
            <li class="nav-item"><a href="brisiruti.php" class="nav-link">Бриши рути</a></li>
            <li class="nav-item"><a href="apregled_rez.php" class="nav-link">Преглед резервации</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link">Одјави се</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" width="1024" style="background-image: url('images/5.gif');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Администратор</h1>
            <h3 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Внес на рути</h1>
          </div>
        </div>
      </div>
    </div>
          
    <?php

    $db = mysqli_connect('localhost', 'root', '', 'trans');
    if (mysqli_connect_errno()) {
     echo "Грешка: Не може да се воспостави конекција со базата.";
     exit;
  }
  $avtobusi=$db->query("SELECT ID_avtobus, pocetna, krajna FROM avtobus");
  mysqli_set_charset($db,'utf8'); ?>
    <section class="ftco-section">
            <div class='container col-lg-7 col-md-9 col-sm-12'> 
            <h6>Внеси нова компанија/автобуска линија
            <input type="submit" name="novo" value="Ново" onclick="window.location='novo.php'"> </h6>
           
            <h4>Внесете ги потребните податоци за нова рута</h4>
            <form class="form-horizontal" action="vnes.php" method="post">
                    <div class="form-group">
                            <label for="poagjanje">Поаѓање:</label>
                            <input id="poagjanje" name="poagjanje" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                            <label for="destinacija">Дестинација</label>
                            <input id="destinacija" name="destinacija" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                            <label for="vreme_poag">Време на поаѓање</label>
                            <input id="vreme_poag" name="vreme_poag" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                            <label for="vreme_dest">Време на пристигнување</label>
                            <input id="vreme_dest" name="vreme_dest" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                            <label for="vremetraenje">Времетраење</label>
                            <input id="vremetraenje" name="vremetraenje" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                                    <label for="cena">Цена</label>
                                    <input id="cena" name="cena" type="text" class="form-control"required>
                            </div>                  
                    <div class="form-group">
                                    <label for="ID_avtobus">Aвтобус</label>
                                    <select name='ID_avtobus'>
                                        <?php
                                         while ($row = $avtobusi->fetch_assoc()) {
        
                                            unset($ID_avtobus, $pocetna, $krajna);
                                            $id = $row['ID_avtobus'];
                                            $pocetna =$row['pocetna'];
                                            $krajna=$row['krajna'];
                                            ?>
                                            <option value="<?php echo $id; ?>"> <?php 
                                            //echo $pocetna.$krajna;
                                            echo $id; ?> </option> <?php
                                           
                          }
                          ?>
                            </div>  
            
                    <input type="submit" name="vnesi" value="Внеси" required>
                    
                     </form>
                </section>
    
   
  
    	
   

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