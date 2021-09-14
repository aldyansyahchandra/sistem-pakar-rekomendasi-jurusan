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
        <h2 class="text-center">BASIS PENGETAHUAN</h2>
        <form id="form1" name="form1" method="post" action="a_input_basis_pengetahuan.php">
        </form>
        
        <br><form id="form1" name="form1" method="post">
        <label for="sel1">Nama Jurusan</label>            
				<select class="form-control" name="jurusan">
				<option>-Pilih Jurusan-</option>
               <?php 
 			        $tampil="select * from jurusan";
			        $query1= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query1)){  
					echo "<option value='".$hasil['nama_jurusan']."'>".$hasil['id_jurusan']." ".$hasil['nama_jurusan']."</option>";
			}
					?>
  		</select>

  		<br><label for="sel2">PERNYATAAN</label><br>
<form id="form2" name="form2" method="post" action="sistem_pakar.php">
    <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body">
        	<?php
        	$tampil="select * from pernyataan";
			$query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
					echo "<input type='checkbox' value='".$hasil['pernyataan']."' name='pernyataan[]' /> ".$hasil['pernyataan']."<br>";
			
                  }
					?>
        <br>
            </div>
    </div>
    <br><button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
    <?php			
        if(isset($_POST['submit'])){
            $jurusan= $_POST['jurusan'];
            $pernyataan = $_POST['pernyataan'];
            $jumlah_dipilih = count($pernyataan);
           for($x=0;$x<$jumlah_dipilih;$x++){
	                   $hasil= mysqli_query($konek_db, "INSERT INTO basis_pengetahuan (nama_jurusan, pernyataan) values('$jurusan','$pernyataan[$x]')");
                        
                    }
        }
    
                ?>
            </form>
            <br>
            <br>
        </form>
        </div>
    </div>
</div>

</body>
</html>