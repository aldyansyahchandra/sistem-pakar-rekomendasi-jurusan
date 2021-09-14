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
<body>
	<?php
	include ('navbar.php');
?>
<?php
  include ('sidebar.php');
?>
 <div class="col-sm-8 text-left"> 
      <center><h2>SISTEM PAKAR REKOMENDASI JURUSAN</h2></center>
        
        <label for="sel1">Pernyataan:</label> 
        <form id="form2" name="form2" method="post" action="sistem_pakar.php">
          <?php
            $tampil="select * from pernyataan";
            $query= mysqli_query($konek_db,$tampil);
            while($hasil=mysqli_fetch_array($query)){  
              // echo "<input type='checkbox' value='".$hasil['pernyataan']."' name='pernyataan[]' /> ".$hasil['pernyataan']."<br>"."<br>";
              echo "<input type='checkbox' value='".$hasil['id_pernyataan']."' name='pernyataan[]' /> ".$hasil['pernyataan']."<br>"."<br>";
            }
          ?>
        <br>
        <button type="submit" name ="submit" onclick="return checkHasil()" class="btn btn-primary">CEK HASIL</button><br><br>
        </form>

        <div class="panel panel-info">
                <div class="panel-heading">HASIL SISTEM PAKAR</div>
                <div class="panel-body">
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Lihat Detail</th>
                            <th>NO</th>
                            <th>ID Jurusan</th>
							              <th>Nama Jurusan</th>
                            <th>Masa Studi</th>
                            <th>Jenis Kecerdasan</th>

                        </tr>
                    </thead>


                    <?php     
        if(isset($_POST['submit'])){
            $pernyataan = isset($_POST['pernyataan']) ? $_POST['pernyataan'] : "none";

            if($pernyataan != "none"){

                $tmp_pernyataan = array();
                foreach($pernyataan as $key => $val){
                  $tmp_pernyataan[] = $val;
                }
                $res = implode(", ",$tmp_pernyataan);

                if ($res == 'P01, P02, P03, P10, P11, P12, P19, P20, P21, P28, P29, P30, P37, P38, P39') {
                  $res_jurusan = "J01";
                }elseif ($res == 'P01, P02, P03, P10, P11, P12, P19, P20, P21, P28, P29, P30, P37, P38, P40') {
                  $res_jurusan = "J02";
                }elseif ($res == 'P01, P02, P03, P10, P11, P12, P19, P20, P21, P28, P29, P30, P41, P42, P43') {
                  $res_jurusan = "J03";
                }elseif ($res == 'P04, P05, P06, P13, P14, P15, P22, P23, P24, P31, P32, P33, P44, P45, P46, P47') {
                  $res_jurusan = "J04";
                }elseif ($res == 'P04, P05, P06, P13, P14, P15, P22, P23, P24, P31, P32, P33, P48, P49, P50, P51') {
                  $res_jurusan = "J05";
                }elseif ($res == 'P04, P05, P06, P13, P14, P15, P22, P23, P24, P31, P32, P33, P48, P52, P53') {
                  $res_jurusan = "J06";
                }elseif ($res == 'P07, P08, P09, P16, P17, P18, P25, P26, P27, P34, P35, P36, P54, P55, P56') {
                  $res_jurusan = "J07";
                }elseif ($res == 'P07, P08, P09, P16, P17, P18, P25, P26, P27, P34, P35, P36, P54, P60, P61') {
                  $res_jurusan = "J09";
                }elseif ($res == 'P07, P08, P09, P16, P17, P18, P25, P26, P27, P34, P35, P36, P57, P58, P59') {
                  $res_jurusan = "J08";
                }elseif ($res == 'P07, P08, P09, P16, P17, P18, P25, P26, P27, P34, P35, P36, P62, P63, P64, P65') {
                  $res_jurusan = "J10";
                }else{
                  $res_jurusan = "0";
                }
                // echo "res: ".$res;
                // exit();

                $tmp            = array_count_values($pernyataan);            
                $arr_max        = max($tmp);
                $key            = array_search($arr_max, $tmp);
                $jumlah_dipilih = count($pernyataan);
    
                $tampil ="SELECT DISTINCT b.nama_jurusan, p.id_jurusan, p.nama_jurusan, p.masa_studi, p.jenis_kecerdasan
              FROM
                basis_pengetahuan b,
                jurusan p 
              WHERE p.id_jurusan = '".$res_jurusan."' AND
              p.nama_jurusan = b.nama_jurusan  
              GROUP BY b.nama_jurusan  ";

              $result = mysqli_query($konek_db, $tampil);
              $no     = 1;

              if ($res_jurusan != '0') {
                while($hasil  = mysqli_fetch_array($result)){
                  echo "
                  <tr> 
                  <td><a href=\"hasil_sistem_pakar.php?id=".$hasil['id_jurusan']."\"><i class='glyphicon glyphicon-search'></i></a></td> 
                  <td>".$no."</td>
                  <td>".$hasil['id_jurusan']."</td>
                  <td>".$hasil['nama_jurusan']."</td>  
                  <td>".$hasil['masa_studi']."</td>
                  <td>".$hasil['jenis_kecerdasan']."</td>
                  </tr>";
                  $no++;
                }
              }else{
                echo "
                  <tr> 
                  <td colspan='6' style='text-align:center;'>No Result</td>
                  </tr>";
              }
              
            }else{
              ?>              
              <script class="JavaScript" type="text/javascript">
                window.alert("Checkbox wajib diisi!!");
              </script>
              <?php
            }
            
        }
    
                ?>
            </table>
        </div>
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



<script class="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
function checkHasil(){
	return confirm('Apakah anda sudah yakin?')
}
</script>
</body>
</html>