<?php
include('koneksi.php');
$query="DELETE from jurusan where id_jurusan='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:a_jurusan.php");
?>