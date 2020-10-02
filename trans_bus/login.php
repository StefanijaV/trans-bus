<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'trans');
   if (mysqli_connect_errno()) {
    echo "Грешка: Не може да се воспостави конекција со базата.";
    exit;
 }
    if(isset($_POST['username']) && isset($_POST['password'])) {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
      $query_a=$db->query("SELECT ID_admin, password FROM admin WHERE username='$username'");
      if( mysqli_num_rows($query_a) >0){
      $adata=mysqli_fetch_array($query_a);
         if(password_verify($password, $adata['password'])){
         {
            header("location:http://localhost/trans_bus/ahome.html");
         }
      }
      else {
         ?>
             <script language="javascript" type="text/javascript">
               alert("Грешно корисничко име или лозинка");
                  window.location.href='index.html';
                  </script>
            <?php
      }
   }
      $query_u=$db->query("SELECT ID_patnik, password FROM patnik WHERE username='$username'");
      if( mysqli_num_rows($query_u)==0){
         ?>
             <script language="javascript" type="text/javascript">
               alert("Корисничкото име не постои. Ве молиме регистрирајте се.");
                  window.location.href='registracija.html';
                  </script>
            <?php
      }
      if( mysqli_num_rows($query_u) >0){
         $data=mysqli_fetch_array($query_u);
         if(password_verify($password, $data['password'] ))
         {
            $_SESSION["username"]=$username;
            header("location:http://localhost/trans_bus/home.php");
         }
         else {
            ?>
             <script language="javascript" type="text/javascript">
               alert("Грешно корисничко име или лозинка");
                  window.location.href='index.html';
                  </script>
            <?php
         }
      }
   }
?>