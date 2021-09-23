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
        <h2 class="text-center">INPUT JURUSAN</h2>
      <form class="form-horizontal" method="post" data-toggle="validator" role="form" action="a_input_jurusan.php">

      	<div class="form-group has-feedback">
				<label class="control-label col-sm-2" for="nama">ID Jurusan:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="id_jurusan" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>

			<div class="form-group has-feedback">
				<label class="control-label col-sm-2"  for="nama">Nama Jurusan:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="nama_jurusan" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>

			<div class="form-group has-feedback">
				<label class="control-label col-sm-2"  for="nama">Masa Studi:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="masa_studi" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>

			<div class="form-group has-feedback">
				<label class="control-label col-sm-2"  for="nama">Jenis Kecerdasan:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" required name="jenis_kecerdasan" data-error="Isi kolom dengan benar">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors" role="alert"></div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Detail Kompetensi:</label>
				<div class="col-sm-10">
                    <textarea rows='10' class="form-control" name="detail_kompetensi"></textarea>
				</div>
			</div>

			 <div class="form-group">
				<label class="control-label col-sm-2" for="alamat">Jenjang Karir:</label>
				<div class="col-sm-10">
                    <textarea rows='10' class="form-control" name="jenjang_karir"></textarea>
				</div>
			</div>
	<button type="submit" name ="submit" class="btn btn-primary">Simpan</button><br>
	<?php
		if(isset($_POST['submit'])){

			$id_jurusan     = $_POST['id_jurusan'];
            $nama_jurusan   = $_POST['nama_jurusan'];
            $masa_studi   = $_POST['masa_studi'];
            $jenis_kecerdasan   = $_POST['jenis_kecerdasan'];
            $detail_kompetensi   = $_POST['detail_kompetensi'];
            $jenjang_karir   = $_POST['jenjang_karir'];
            $query="INSERT INTO jurusan SET id_jurusan='$id_jurusan',nama_jurusan='$nama_jurusan',
            	masa_studi='$masa_studi', jenis_kecerdasan='$jenis_kecerdasan', detail_kompetensi='$detail_kompetensi', jenjang_karir='$jenjang_karir'";
            $result=mysqli_query($konek_db, $query);
                        if($result){
                            echo '<script language="javascript">';
                            echo 'alert("Data Berhasil disimpan")';
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