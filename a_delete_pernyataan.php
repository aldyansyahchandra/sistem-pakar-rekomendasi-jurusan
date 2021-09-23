<?php
include('koneksi.php');
$query="DELETE from pernyataan where id_pernyataan='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:a_pernyataan.php");
?>