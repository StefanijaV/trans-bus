<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<head>
  <title>Регистрација</title>
</head>
<body>
<?php
if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $email = $_POST['email'];
    }
    $db = mysqli_connect('localhost', 'root', '', 'trans');
    if (mysqli_connect_errno()) {
     echo "Грешка: Не може да се воспостави конекција со базата.";
     exit;
  }
  $sql_u = "SELECT * FROM patnik WHERE username='$username'";
  	$sql_e = "SELECT * FROM patnik WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);
    $sql_u = "SELECT * FROM patnik WHERE username='$username'";
  	$sql_e = "SELECT * FROM patnik WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
      ?>
  <script language="javascript" type="text/javascript">
alert("Корисничкото име е зафатено!");
window.location.href='registracija.html';
</script>
 <?php
      }
  	else if(mysqli_num_rows($res_e) > 0){
     ?>
 <script language="javascript" type="text/javascript">
alert("Внесениот емаил веќе е регистриран!");
window.location.href='registracija.html';
</script>
 <?php
  	}else{
  mysqli_set_charset($db,'utf8');
  $query_patnik = "INSERT INTO patnik (ime, prezime, username, password , email) 
  VALUES ('$ime', '$prezime', '$username', '$hash', '$email')";
  $result = $db->query($query_patnik);
  if ($result=== TRUE) {
    ?>
  <script language="javascript" type="text/javascript">
alert("Податоците се успешно внесени во базата.");
window.location.href='index.html';
</script>
 <?php
} else {
    echo "Error: ". $db->error;
}
      }
$db->close();
?>
</body>
</html> 
       
