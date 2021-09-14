<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Pakar Rekomendasi Jurusan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	include ('navbar_admin.php');
?>

<?php
  include ('sidebar_admin.php');
?>
    
    <div class="col-sm-8 text-left"> 
       <center><h2>SISTEM PAKAR REKOMENDASI JURUSAN DI 
</h2><h2>SMKN 1 CIBINONG</h2></center><br>
      <p>Selamat datang <?php echo $login_session; ?>. Silahkan pilih menu yang diinginkan</p>
    </div>

</body>
</html>