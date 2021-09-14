<?php
include('koneksi.php');
$query="DELETE from admin where username='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:a_data_admin.php");
?>