<?php
require_once '../config/config.php';
require_once '../config/session.php'; 

$act = $_POST['act'];

// ////////User//////////

$username   = $_POST['username'];
$pass       = base64_encode(base64_encode($_POST['pass']));

// ////////////////////////////////////////////////Login//////////////////////////////////////////////////

if ($act == "login_user") {
    $log_id = mysqli_query($conn, "SELECT * FROM m_user WHERE username='$username' && password='$pass'");
    $result = mysqli_num_rows($log_id);
    if ($result > 0) {
        $user = mysqli_fetch_array($log_id);
        $_SESSION['id_user']    = $user['id_user'];
        $_SESSION['id_pgw']     = $user['id_pgw']; 
        $_SESSION['nama_user']  = $user['nama_user'];
        $_SESSION['username']   = $user['username'];
        $_SESSION['password']   = $user['password'];
        $_SESSION['category']   = $user['category'];

        if($user['category'] == 'Admin'){
             $status = '3'; 
        } else if($user['category'] == 'Peggawai'){
            $status = '1'; 
        } 
    } else {
        $status = '404'; //Tidak ditemukan
    }
}

echo $status;
?>