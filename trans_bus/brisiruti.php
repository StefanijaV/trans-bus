<?php
include_once 'action.php';
?>
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
	          <li class="nav-item"><a href="vnesiruti.php" class="nav-link">Внеси рути</a></li>
            <li class="nav-item active"><a href="brisiruti.php" class="nav-link">Бриши рути</a></li>
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
            <h3 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Бришење на рути</h1>
          </div>
        </div>
      </div>
    </div>
          

    <section class="ftco-section">
            <div class='container col-lg-7 col-md-9 col-sm-12'> 
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script>
                    function delete_confirm(){
                        if($('.checkbox:checked').length > 0){
                            var result = confirm("Дали сте сигурни дека сакате да ги избришете селектираните рути?");
                            if(result){
                                return true;
                            }else{
                                return false;
                            }
                        }else{
                            alert('Селектирајте барем една рута!');
                            return false;
                        }
                    }
                    $(document).ready(function(){
                        $('#select_all').on('click',function(){
                            if(this.checked){
                                $('.checkbox').each(function(){
                                    this.checked = true;
                                });
                            }else{
                                 $('.checkbox').each(function(){
                                    this.checked = false;
                                });
                            }
                        });
                        
                        $('.checkbox').on('click',function(){
                            if($('.checkbox:checked').length == $('.checkbox').length){
                                $('#select_all').prop('checked',true);
                            }else{
                                $('#select_all').prop('checked',false);
                            }
                        });
                    });
                    </script>
                    <?php
                    if(!empty($statusMsg)){ ?>
                        <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                        <?php } ?>
                        <!-- Users data list -->
                        <?php
                         $db = mysqli_connect('localhost','root','','trans')
                         or die('Error connecting to MySQL server');
                         mysqli_set_charset($db,'utf8');
                          
                                     
                                     // Get users from the database
                                     $query = $db->query("SELECT * FROM ruta ORDER BY ID_avtobus");
                                     $broj=$query->num_rows;
                                     ?>
                        <h3> <?php echo "Број на најдени рути: ".$broj."</br>"; ?> </h3>
                        <p> Селектирајте: </p>
                        
                        <form name="bulk_action_form" action="" method="post" onSubmit="return delete_confirm();"/>
                            <table border=2 class="bordered">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" id="select_all" value=""/></th>        
                                    <th>ID рута</th>
                                    <th>ID автобус</th>
                                    <th>Поаѓање</th>
                                    <th>Дестинација</th>
                                    <th>Време на поаѓање</th>
                                    <th>Време на пристигнување</th>
                                    <th>Времетраење</th>
                                    <th>Цена</th>
                                    
                                </tr>
                                </thead>
                                <?php
                                // Include the database configuration file
                               
                                // List all records
                                if($query->num_rows > 0){
                                    while($row = $query->fetch_assoc()){
                                ?>
                                <tr>
                                    <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['ID_ruta']; ?>"/></td>        
                                    <td><?php echo $row['ID_ruta']; ?></td>
                                    <td><?php echo $row['ID_avtobus']; ?></td>
                                    <td><?php echo $row['poagjanje']; ?></td>
                                    <td><?php echo $row['destinacija']; ?></td>
                                    <td><?php echo $row['vreme_poag']; ?></td>
                                    <td><?php echo $row['vreme_dest']; ?></td>
                                    <td><?php echo $row['vremetraenje']; ?></td>
                                    <td><?php echo $row['cena']; ?></td>
                                   
                                    
                                </tr>
                                <?php } }else{ ?>
                                    <tr><td colspan="5">Нема најдени рути.</td></tr>
                                <?php } ?>
                            </table>
                            <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Избриши"/>
                        </form>
  
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