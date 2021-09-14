<?php
include('koneksi.php');
$username= $_POST['username'];
$password= md5($_POST['password']);
$error='';
session_start();
    if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
        }

$query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
$result = $konek_db->query($query) or die($konek_db->error.__LINE__);
    if($result->num_rows > 0) {
              session_start();
              $_SESSION['login_user']=$username;
              header('location:a_home_admin.php');
        }
    else {
        header('location:salahlogin.php');
        }
    ?>