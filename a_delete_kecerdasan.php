<?php
include('koneksi.php');
$query="DELETE from tipe_kecerdasan where id_kecerdasan='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:a_kecerdasan.php");
?>