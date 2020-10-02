<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <title>Админ</title>
    </head>
    <body>
        
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'trans');
        if (mysqli_connect_errno()) {
         echo "Грешка: Не може да се воспостави конекција со базата.";
         exit;
      }
      if(isset($_POST['ID_avtobus']) && isset($_POST['vremetraenje']) && isset($_POST['cena']) && isset($_POST['poagjanje'])
       && isset($_POST['destinacija'])&& isset($_POST['vreme_poag'])&& isset($_POST['vreme_dest'])) {
            $ID_avtobus=$_POST['ID_avtobus'];
            $vremetraenje=$_POST['vremetraenje'];
            $cena=$_POST['cena'];
            $poagjanje=$_POST['poagjanje'];
            $destinacija=$_POST['destinacija'];
            $vreme_poag=$_POST['vreme_poag'];
            $vreme_dest=$_POST['vreme_dest'];
            
       }
    
       mysqli_set_charset($db,'utf8');
       $admin_ruti = "INSERT INTO ruta (ID_avtobus, vremetraenje, cena, poagjanje, destinacija, vreme_poag, vreme_dest) 
       VALUES ('$ID_avtobus', '$vremetraenje','$cena','$poagjanje','$destinacija','$vreme_poag','$vreme_dest')";
       $result = $db->query($admin_ruti);
       if ($result=== TRUE) {
         ?>
       <script language="javascript" type="text/javascript">
     alert("Рутата е успешно внесена во базата.");
     window.location.href='vnesiruti.php';
     </script>
      <?php
     } else {
         echo "Error: ". $db->error;
     }
    
     $db->close();
    ?>
    </body>
</html>
