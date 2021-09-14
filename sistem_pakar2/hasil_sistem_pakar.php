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
<?php
  include ('sidebar.php');
?>

 <div class="col-sm-8 text-left"> 
      <h2 class="text-center">DETAIL HASIL SISTEM PAKAR</h2>
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
      			<br><label class="control-label col-sm-2">NAMA JURUSAN:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='nama_jurusan' readonly value='".$data['nama_jurusan']."'><br>";
                    }
                ?>
     		 </div>
        </div>

        <div class="form-group"  method="POST">
      			<br><label class="control-label col-sm-2">MASA STUDI:</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM jurusan where id_jurusan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='form-control' id='masa_studi' readonly value='".$data['masa_studi']."'><br>";
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
                       echo "<textarea rows='10' class='form-control' id='jenjang_karir' readonly>".$data['jenjang_karir']."</textarea><br>";
                    }
                ?>
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



<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</body>
</html>