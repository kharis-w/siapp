<?php 
session_start();
if (empty($_SESSION['id_user']) || $_SESSION['category'] != "Admin") {
    session_destroy(); 
    $login_redirect_url = "../../index.php";
    echo "<script>alert('Akses ditolak, Silahkan login kembali !'); window.location = '$login_redirect_url'</script>";
}
?>