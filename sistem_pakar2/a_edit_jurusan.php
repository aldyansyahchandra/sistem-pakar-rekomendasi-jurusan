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
   <script src="js/validator.js"></script>
</head>
<body>
<?php
	include ('navbar_admin.php');
?>

<?php
  include ('sidebar_admin.php');
?>

    <div class="col-sm-8 text-left">  
      <h2 class="text-center">EDIT JURUSAN</h2>
       <form method="post">

       	<div class="form-group">
      			<br><label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='id_jurusan' name='id_jurusan' disabled value='".$data['id_jurusan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group">
      			<br><label class="control-label col-sm-2">NAMA JURUSAN:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='nama_jurusan' name='nama_jurusan' value='".$data['nama_jurusan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group">
      			<br><label class="control-label col-sm-2">MASA STUDI:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='masa_studi' name='masa_studi' value='".$data['masa_studi']."' data-error='Isi kolom dengan benar'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group">
            <br><label class="control-label col-sm-2">JENIS KECERDASAN:</label>
          <div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenis_kecerdasan' name='jenis_kecerdasan' value='".$data['jenis_kecerdasan']."' data-error='Isi kolom dengan benar'><br>";
                    }
                ?>
         </div>
        </div>

        <div class="form-group">
      			<br><label class="control-label col-sm-2">DETAIL KOMPETENSI:</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea rows='10' class='form-control' id='detail_kompetensi' name='detail_kompetensi'>".$data['detail_kompetensi']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>

                <div class="form-group">
            <br><label class="control-label col-sm-2">Jenjang Karir:</label><br>
          <div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='10' class='form-control' id='jenjang_karir' name='jenjang_karir' >".$data['jenjang_karir']."</textarea><br>";
                    }
                ?>
         </div>  
        </div>
        <button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
        <?php
                    if(isset($_POST['submit'])){
                      $id = $_GET['id'];
                      $nama_jurusan = $_POST['nama_jurusan'];
                      $masa_studi = $_POST['masa_studi'];
                      $jenis_kecerdasan = $_POST['jenis_kecerdasan'];
                      $detail_kompetensi = $_POST['detail_kompetensi'];
                      $jenjang_karir = $_POST['jenjang_karir'];    
                      $query="UPDATE jurusan SET nama_jurusan='".$_POST['nama_jurusan']."', masa_studi='".$_POST['masa_studi']."', jenis_kecerdasan='".$_POST['jenis_kecerdasan']."', jenjang_karir='".$_POST['jenjang_karir']."', detail_kompetensi='".$_POST['detail_kompetensi']."' WHERE id_jurusan='$id'";
                      $result=mysqli_query($konek_db, $query);
                       if($result){
                            echo '<script language="javascript">';
                            echo 'alert("Data Berhasil diedit")';
                            echo '</script>';
                            }
                    }
                ?>
        </form><br>
    </div>
  </div>
</div>
</body>
</html>