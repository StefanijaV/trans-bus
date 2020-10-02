<?php

        $db = mysqli_connect('localhost', 'root', '', 'trans');
        if (mysqli_connect_errno()) {
         echo "Грешка: Не може да се воспостави конекција со базата.";
         exit;
      } ?>
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
    $kompanii=$db->query("SELECT ID_kompanija, ime FROM kompanija");
    mysqli_set_charset($db,'utf8');
    ?>

    <section class="ftco-section">
            <div class='container col-lg-7 col-md-9 col-sm-12'> 
            <h4>Внеси нова компанија/автобуска линија</h4>
            <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="kompanija">Име на нова компанија</label>
                            <input id="kompanija" name="kompanija" type="text" class="form-control">
                            </div>
                            <input type="submit" name="vnesi1" value="Внеси компанија">
    </form>
    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="pocetok">Почетен град на новата линија</label>
                            <input id="pocetok" name="pocetok" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                            <label for="kraj">Крајна дестинација</label>
                            <input id="kraj" name="kraj" type="text" class="form-control"required>
                            </div>
                    <div class="form-group">
                            <label for="komp">Компанија</label>
                            <select name='ID_kompanija'>
                                <?php
                                 while ($row = $kompanii->fetch_assoc()) {

                                    unset($ID_kompanija, $ime);
                                    $id = $row['ID_kompanija'];
                                    //$name =$row['ime'];
                                    ?>
                                    <option value="<?php echo $id; ?>"> <?php
                                    // echo $name;
                                    echo $id; ?> </option> <?php
                                   
                  }
                  ?>
                  
                    
            
                    <input type="submit" name="vnesi" value="Внеси" required>
                    
                     </form>
                </section>
                <?php
                mysqli_set_charset($db,'utf8');
                if(isset($_POST['vnesi1']))
                {
                    $ime=$_POST['kompanija'];
       $admin_kompanija = "INSERT INTO kompanija (ime) VALUES ('$ime')";
       $result1 = $db->query($admin_kompanija);
       if ($result1=== TRUE) {
        ?>
      <script language="javascript" type="text/javascript">
    alert("Компанијата е успешно внесена во базата.");
    window.location.href='vnesiruti.php';
    </script>
     <?php
      } }
      if(isset($_POST['pocetok'])&&isset($_POST['kraj'])&&isset($_POST['ID_kompanija']))
      {
        $pocetok=$_POST['pocetok'];
        $kraj=$_POST['kraj'];
        $kompanija=$_POST['ID_kompanija'];
       $admin_avtobus="INSERT INTO avtobus (pocetna, krajna, ID_kompanija) VALUES ('$pocetok','$kraj', '$kompanija')";
       $result2=$db->query($admin_avtobus);

      if($result2===TRUE){
        ?>
        <script language="javascript" type="text/javascript">
      alert("Автобуската линија е успешно внесена во базата.");
      window.location.href='vnesiruti.php';
      </script>
       <?php
      } }
      ?>   
  
    	
   

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