<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
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
	include ('navbar.php');
?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <p><a href="index.php"><button type="button" class="btn btn-primary btn-block" style="background-color: #17a2b8;">BERANDA</button></a></p>
     <p><a href="sispak.php"><button type="button" class="btn btn-primary btn-block" style="background-color: #17a2b8;">PEMILIHAN JURUSAN</button></a></p>
     <p><a href="daftarjurusan.php"><button type="button" class="btn btn-primary btn-block" style="background-color: #17a2b8;">DAFTAR JURUSAN</button></a></p>
     <p><a href="about.php"><button type="button" class="btn btn-primary btn-block" style="background-color: #17a2b8;">TENTANG</button></a></p>
 </div>
 <div class="col-sm-8 text-left"> 
      <center><h2>SISTEM PAKAR REKOMENDASI JURUSAN DI 
</h2><h2>SMKN 1 CIBINONG</h2></center><br>
<div class="alert alert-danger alert-dismissible" id="alert">
        <a href="index.php" class="close">&times;</a>
        USERNAME ATAU PASSWORD SALAH, SILAHKAN LOGIN LAGI
        </div>
        <div class="panel panel-info">
                <div class="panel-heading" style="background-color: #17a2b8;"></div>
                <div class="panel-body">
                    <p align=justify>Siswa yang baru saja lulus SMP dan ingin melanjutkan pendidikan ke tingkat SMK akan mengalami pemilihan jurusan. Pemilihan jurusan ini dimaksudkan untuk menempatkan atau penyaluran dalam pemilihan program pengajaran pada calon siswa di tingkat SMK. Jurusan yang dipilih mungkin sesuai dengan minat calon siswa atau mungkin tidak sesuai. Dengan memilih jurusan sekolah yang sesuai minat, dapat meningkatkan motivasi belajar dari calon siswa itu sendiri. Tidak tepatnya memilih jurusan di sekolah dapat berdampak terhadap kehidupan di masa depan. Misalkan, jika siswa belajar hal yang tidak disukai akan memberikan dampak yang negatif pada proses pembelajarannya. Hal seperti ini dapat mengakibatkan nilai akademis dan prestasi dari siswa tersebut menurun. Diharapkan sistem pakar pemilihan jurusan dibuat bertujuan untuk sebagai sarana konsultasi, sarana belajar di suatu instansi dan dapat digunakan sebagai alat yang digunakan untuk menentukan dan mensosialisasikan macam-macam jurusan yang ada di SMKN 1 Cibinong</p>
            </div>
        </div>
		</div>
	</div>
</div>
<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; background-color: #17a2b8;">
          <h4 style="background-color: #17a2b8;">Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post" style="background-color: #17a2b8;"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>     
            
       </div>
      </div>
        
        
   
        
    </div>
  </div>


 <footer style="background-color: #17a2b8;">
  <br>
</footer>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>