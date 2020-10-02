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
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	 <span class="create"><img src="images/icon.ico.png" width="100" height="100"/></span>
	      <a class="navbar-brand" href=""> <font size="20" color="white">ТрансБус</font></a>
	      

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          
	         
            
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/5.gif');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
         
  
          </div>
        </div>
      </div>
    </div>
    
		
		<section class="ftco-section">
      <div class='container col-lg-7 col-md-9 col-sm-12'> 
<div class="container">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->



<!-- CREDIT CARD FORM STARTS HERE -->

<h3 class="panel-title display-td" >Payment Details</h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>
</div>                    
</div>
<form class="form-horizontal" action = " " method = "post">
                  <label>Име и презиме:</label>
                   <br>
                   <input type = "text" name = "name" class = "form-control" required /><br /><br />
                  <label>Број на картичка:</label>
                   <br>
                   <input type = "text" name = "cardNumber" class = "form-control" pattern="\d{16}" required/><br/><br />
                   <label>Датум на истекување:</label>
                   <br>
                   <input type = "text" name = "cardExpiry" class = "form-control" pattern="\d{2}/\d{2}" placeholder="mm/yy" required /><br /><br />
                   <label>CVC</label>
                   <br>
                   <input type = "password" name = "cardCVC" class = "form-control" patten="\d{3}"required /><br /><br />
                   <input type="submit" class="btn btn-primary" value="Плати" name="plati">
               </form>
    
    
        <?php
        $ime=$_SESSION["username"];
        $idruta=$_SESSION["id_ruta"];
        $data=$_SESSION["data"];
        if(isset($_POST['name']) && isset($_POST['cardNumber']) && isset($_POST['cardExpiry'])&& isset($_POST['cardCVC'])) {
        $name=$_POST['name'];
        $card=$_POST['cardNumber'];
        $ex=$_POST['cardExpiry'];
        $cvc=md5($_POST['cardCVC']);
        mysqli_set_charset($db,'utf8');
        $plati = "INSERT INTO plakjanje (name, cardNumber, cardExpiry, cardCVC) 
  VALUES ('$name', '$card', '$ex', '$cvc')";
  $result = $db->query($plati);
  if ($result=== TRUE) {
    
$sql = "INSERT INTO rezervacija (data, ID_plakjanje)
VALUES ('$data', LAST_INSERT_ID())";

$vnes_id="INSERT INTO patnik_ruta (ID_ruta,ID_patnik, ID_rezervacija) VALUES 
((SELECT ID_ruta FROM ruta WHERE ID_ruta=$idruta),(SELECT ID_patnik FROM patnik WHERE username='$ime'), LAST_INSERT_ID())";
if (($db->query($sql) == TRUE)&&($db->query($vnes_id) == TRUE))
{
    ?>

  <script language="javascript" type="text/javascript">
alert("Вашата карта е купена!");
window.location.href='moi_rez.php';
</script>
 <?php
}
} else {
  ?>
  <script language="javascript" type="text/javascript">
alert("Има некоја грешка, обиди се повторно");
window.location.href='plakanje.php';
</script>
 <?php
}
      }
$db->close();
?>
                
          
<!-- CREDIT CARD FORM ENDS HERE -->


          

        </form>
    </div>
    
    

	<!-- If you're using Stripe for payments -->
            </div>
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