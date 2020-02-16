<?php 
session_start();
if (empty($_SESSION['id_user']) || $_SESSION['category'] != "Pegawai") {
    session_destroy();
    // header('location: login.php');
    $login_redirect_url = "login.php";
    echo "<script>alert('Akses ditolak, Silahkan login kembali !'); window.location = '$login_redirect_url'</script>";
}
?>