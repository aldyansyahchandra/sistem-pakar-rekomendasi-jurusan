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

<?php
  include ('sidebar.php');
?>

 <div class="col-sm-8 text-left"> 
      <center><h2>ABOUT</h2></center>
      <div class="panel panel-success">
      <div class="panel-heading">Web SMKN 1 CIBINONG</div>
      <div class="panel-body">
          <a href="https://smkn1cibinong.sch.id/"> https://smkn1cibinong.sch.id/	</a>
          </div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Informasi Pendaftaran</div>
      <div class="panel-body">
        Tahap 1 (7-11 Juni 2021)<br>
          - Jalur : Afirmasi (KETM)<br>
          - Prioritas Terdekat<br>
          - Perpindahan/Anak Guru<br>
          - Prestasi Nilai Rapot Unggulan<br>
          <br>
        Tahap 2 (25 Juni-1 Juli 2021)<br>
          - Jalur : Prestasi Nilai Rapot Umum<br>
          <br>
          Link Pendaftaran : <a href="https://pendaftar.ppdb.disdik.jabarprov.go.id/"> https://pendaftar.ppdb.disdik.jabarprov.go.id </a>
          </div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Google Form</div>
      <div class="panel-body">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLScwqH3yDo87V7tJQcPANDVQBMNL4ySVYnEPRX_llx78nEcV1Q/viewform?usp=pp_url">http://bit.ly/Gform_Uji_User</a>
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
</script>
</body>
</html>