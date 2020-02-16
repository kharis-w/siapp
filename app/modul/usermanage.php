<?php
require_once '../config/config.php';

session_start();
$act    = $_POST['act'];
$id     = $_POST['id'];

date_default_timezone_set("Asia/Jakarta");

// ////////m_user//////////

$id_user   = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$username  = $_POST['username'];
$category  = $_POST['category'];
$password  = base64_encode(base64_encode ($_POST['password']));
$pass      = $_POST['pass'];

// ////////////////////////////////////////////////m_user//////////////////////////////////////////////////

if ($act == "usermanage") {
    $sql = "SELECT concat(id_user,'#',nama_user,'#',username,'#',category,'#',password) as nama_user FROM m_user WHERE id_user = '" . $id . "' limit 1";
    $row = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($row);
    echo $data['nama_user'];
}
elseif ($act == "addusermanage") {
    $log_id = mysqli_query($conn, "SELECT * FROM m_user WHERE id_user='$id_user'");
    $result = mysqli_num_rows($log_id);
    if ($result == 0) {
        $log = "INSERT INTO m_user (id_user, nama_user, username, password, category) VALUES ('" . $id_user . "','" . $nama_user . "','" . $username . "','" . $password . "','" . $category . "')";
        if ($conn->query($log) == true) {
            $status = '1'; //Berhasil
        }
    }
    else {
        $status = '2'; //Gagal
    }
}
elseif ($act == "editusermanage") {
    $log = "UPDATE m_user SET nama_user = '" . $nama_user . "', username = '" . $username . "', password = '" . $password . "', category = '" . $category . "' WHERE id_user = '" . $id . "'";
    if ($conn->query($log) == true) {
        $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}
elseif ($act == "delusermanage") {
    $log = "DELETE FROM `m_user` WHERE id_user = '" . $id . "'";
    if ($conn->query($log) == true) {
        $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}

echo $status;
?>