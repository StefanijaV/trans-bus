<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
	      <a class="navbar-brand" href="home.html"> <font size="20" color="white">ТрансБус</font></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Почетна
	      </button>

	         <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="home.php" class="nav-link">Почетна</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">За нас</a></li>
              <li class="nav-item active"><a href="avtobuskiStanici.php" class="nav-link">Автобуски станици</a></li>
       <li class="nav-item"><a href="moi_rez.php" class="nav-link">Мои резервации</a></li>
              <li class="nav-item"><a href="contact_h.php" class="nav-link">Контакт</a></li>	    
                    <li class="nav-item"><a href="index.html" class="nav-link">Одјави се</a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"> <?php echo $_SESSION["username"]; ?>  </a></li>
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
          
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Автобуски станици</h1>
          </div>
        </div>
      </div>
    </div>
		
		<section class="three-fourth" align="center">
 
        
  <center>
<table style="width: 500px;"><tr><td align="center" valign="top">
                   
                            <div class="booking row">
                        
                                <div>
	<table class="table table-striped bootstrap-datatable datatable responsive table-bordered table-hover" cellspacing="0" rules="all" border="1" id="ctl00_MainContent_GridViewAvtobuski" style="border-collapse:collapse;"class="box" border="1px" class="center-div" >
    


		<tr>
			<th scope="col">Назив</th><th scope="col">Број на перони</th><th scope="col">Град</th><th scope="col">Работно време</th>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$0&#39;)" style="cursor:pointer;cursor:hand;">Скопска Автобуска Станица</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$0&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$0&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl02_EditTittle1">Скопје</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$0&#39;)" style="cursor:pointer;cursor:hand;">00:00 до 24:00</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$1&#39;)" style="cursor:pointer;cursor:hand;">Автбуска Станица Струмица</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$1&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$1&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl03_EditTittle1">Струмица</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$1&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$2&#39;)" style="cursor:pointer;cursor:hand;">Штипска Автобуска Станица</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$2&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$2&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl04_EditTittle1">Штип</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$2&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$3&#39;)" style="cursor:pointer;cursor:hand;">Велешка Автобуска Станица</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$3&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$3&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl05_EditTittle1">Велес</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$3&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$4&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Битола</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$4&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$4&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl06_EditTittle1">Битола</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$4&#39;)" style="cursor:pointer;cursor:hand;">00:00 до 24:00</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$5&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Берово</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$5&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$5&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl07_EditTittle1">Берово</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$5&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$6&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станива Делчево</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$6&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$6&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl08_EditTittle1">Делчево</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$6&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$7&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Неготино</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$7&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$7&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl09_EditTittle1">Неготино</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$7&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$8&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Кавадарци</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$8&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$8&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl10_EditTittle1">Кавадарци</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$8&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$9&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Охрид</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$9&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$9&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl11_EditTittle1">Охрид</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$9&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$10&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Свети Николе</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$10&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$10&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl12_EditTittle1">Свети Николе</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$10&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$11&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Тетово</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$11&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$11&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl13_EditTittle1">Тетово</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$11&#39;)" style="cursor:pointer;cursor:hand;">00:00 до 24:00</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$12&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Прилеп</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$12&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$12&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl14_EditTittle1">Прилеп</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$12&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$13&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Куманово</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$13&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$13&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl15_EditTittle1">Куманово</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$13&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$14&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Струга</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$14&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$14&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl16_EditTittle1">Струга</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$14&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$15&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Радовиш</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$15&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$15&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl17_EditTittle1">Радовиш</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$15&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$16&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Кичево</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$16&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$16&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl18_EditTittle1">Кичево</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$16&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$17&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Дебар </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$17&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$17&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl19_EditTittle1">Дебар</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$17&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$18&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Гостивар (Еуро-Турист)</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$18&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$18&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl20_EditTittle1">Гостивар</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$18&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$19&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Гостивар (Дурмо-Турист)</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$19&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$19&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl21_EditTittle1">Гостивар (Дурмо)</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$19&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr style="font-size:Small;">
			<td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$20&#39;)" style="cursor:pointer;cursor:hand;">Автобуска Станица Крива Паланка</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$20&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$20&#39;)" style="cursor:pointer;cursor:hand;">
                                                <span id="ctl00_MainContent_GridViewAvtobuski_ctl22_EditTittle1">Крива Паланка</span>
                                            </td><td onclick="javascript:__doPostBack(&#39;ctl00$MainContent$GridViewAvtobuski&#39;,&#39;Select$20&#39;)" style="cursor:pointer;cursor:hand;">&nbsp;</td>
		</tr><tr>
			
		</tr>
	</table>
</div>
                                <br />
                                
                    
            </div>
        
                       
    </td>
    </tr>
      </table>
            </center>
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