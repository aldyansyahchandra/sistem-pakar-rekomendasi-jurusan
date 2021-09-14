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
	include ('navbar_admin.php');
?>

<?php
  include ('sidebar_admin.php');
?>

    <div class="col-sm-8 text-left"> 
      <h2 class="text-center">DETAIL JURUSAN</h2>
      
      <div class="form-group"  method="POST">
      <br><label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
      		<?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='id_jurusan' readonly value='".$data['id_jurusan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">NAMA JURUSAN :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='namajurusan' readonly value='".$data['nama_jurusan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">MASA STUDI:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='masastudi' readonly value='".$data['masa_studi']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group"  method="POST">
            <br><label class="control-label col-sm-2">JENIS KECERDASAN:</label>
          <div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenis_kecerdasan' readonly value='".$data['jenis_kecerdasan']."'><br>";
                    }
                ?>
         </div>
        </div>

        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">DETAIL KOMPETENSI:</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea rows='10' class='form-control' id='detail_kompetensi' readonly>".$data['detail_kompetensi']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>

        <div class="form-group"  method="POST">
            <br><label class="control-label col-sm-2">JENJANG KARIR:</label><br>
          <div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='10' class='form-control' id='jenjang_karir'  readonly>".$data['jenjang_karir']."</textarea><br>";
                    }
                ?>
         </div>  
        </div>
        </div>
    </div>
  </div>
</div>	
</body>
</html>