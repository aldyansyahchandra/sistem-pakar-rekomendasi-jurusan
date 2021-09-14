<?php
include('koneksi.php');
$query="DELETE from basis_pengetahuan where nama_jurusan='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:a_basis_pengetahuan.php");
?>