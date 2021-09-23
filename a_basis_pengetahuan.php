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
  <script>
$(document).ready( function () {
    $('#example1').DataTable();  
} );
</script>
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
         <form id="form1" name="form1" method="post" action="a_basis_pengetahuan.php">
         	
  </form>
         	<br>
<a href="a_input_basis_pengetahuan.php"><button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button></a>
        <br><br>

        <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>No</th>
							<th>Nama Jurusan</th>
                            <th>Pernyataan</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                  	<?php
                  		$queri="Select * From basis_pengetahuan";
		$hasil=mysqli_query ($konek_db, $queri);   
		$id = 0;
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        			<tr>  
        			<td>".$id."</td> 
					<td>".$data[0]."</td>  
        			<td>".$data[1]."</td>  

                    <td><a href=\"a_delete_basis_pengetahuan.php?id=".$data[0]."\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a></td>
                   
        		</tr>   
        	";      
			
                    }
 ?>  
</table><br><br><br><br><br>
        </div>
            </div>
  </div>
</div>

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>
</body>
</html>