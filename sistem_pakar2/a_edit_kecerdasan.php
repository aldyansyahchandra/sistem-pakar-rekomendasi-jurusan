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
      <h2 class="text-center">EDIT JENIS KECERDASAN</h2>
       <form method="post">

       	<div class="form-group">
      			<br><label class="control-label col-sm-2">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM tipe_kecerdasan where id_kecerdasan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='id_kecerdasan' name='id_kecerdasan' disabled value='".$data['id_kecerdasan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group">
      			<br><label class="control-label col-sm-2">JENIS KECERDASAN:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM tipe_kecerdasan where id_kecerdasan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='jenis_kecerdasan' name='jenis_kecerdasan' value='".$data['jenis_kecerdasan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group">
      			<br><label class="control-label col-sm-2">PENJELASAN:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM tipe_kecerdasan where id_kecerdasan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea rows='10' class='form-control' id='penjelasan' name='penjelasan'>".$data['penjelasan']."</textarea><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group">
      			<br><label class="control-label col-sm-2">REKOMENDASI JURUSAN:</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM tipe_kecerdasan where id_kecerdasan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea rows='10' class='form-control' id='rekomendasi_jurusan' name='rekomendasi_jurusan'>".$data['rekomendasi_jurusan']."</textarea><br>";
                    }
                ?>
     		 </div>  
        </div>

                
        <button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
        <?php
                    if(isset($_POST['submit'])){
                      $id = $_GET['id'];
                      $jenis_kecerdasan = $_POST['jenis_kecerdasan'];
                      $penjelasan = $_POST['penjelasan'];
                      $rekomendasi_jurusan = $_POST['rekomendasi_jurusan'];    
                      $query="update tipe_kecerdasan SET jenis_kecerdasan='".$_POST['jenis_kecerdasan']."', penjelasan='".$_POST['penjelasan']."', rekomendasi_jurusan='".$_POST['rekomendasi_jurusan']."' WHERE id_kecerdasan='$id'";
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