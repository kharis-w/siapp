<?php
require_once '../config/config.php';
require_once '../config/session.php'; 


$act    = $_POST['act'];
$id     = $_POST['id'];

date_default_timezone_set("Asia/Jakarta");

// ////////m_siswa//////////

$id_pgw       = $_POST['id_pgw'];
$nama_pgw            = $_POST['nama_pgw'];
$nip_pgw           = $_POST['nip_pgw'];
$pangkat_pgw           = $_POST['pangkat_pgw'];
$jabatan_pgw          = $_POST['jabatan_pgw'];
$unit_kerja_pgw     = $_POST['unit_kerja_pgw'];
$no_telpn_pgw  = $_POST['no_telpn_pgw'];
$alamat_pgw          = $_POST['alamat_pgw'];
$category_pgw         = $_POST['category_pgw'];
$img_pgw         = $_POST['img_pgw'];

// ////////////////////////////////////////////////m_siswa//////////////////////////////////////////////////

if ($act == "datapegawai") {
    $sql = "SELECT concat(id_pgw,'#',nama_pgw,'#',nip_pgw,'#',pangkat_pgw,'#',jabatan_pgw,'#',unit_kerja_pgw,'#',no_telpn_pgw,'#',alamat_pgw,'#',category_pgw,'#',img_pgw) as name FROM m_pgw WHERE id_pgw = '" . $id . "' limit 1";
    $row = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($row);
    echo $data['name'];
}
elseif ($act == "adddatapegawai") {
    $log_id = mysqli_query($conn, "SELECT * FROM m_pgw WHERE id_pgw='$id_pgw'");
    $result = mysqli_num_rows($log_id);
    if ($result == 0) {
        $log1 = "INSERT INTO m_pgw (id_pgw, nama_pgw, nip_pgw, pangkat_pgw, jabatan_pgw, unit_kerja_pgw, no_telpn_pgw, alamat_pgw, category_pgw, img_pgw) VALUES ('" . $id_pgw . "','" . $nama_pgw . "','" . $nip_pgw . "','" . $pangkat_pgw . "','" . $jabatan_pgw . "','" . $unit_kerja_pgw . "','" . $no_telpn_pgw . "','" . $alamat_pgw . "', '" . $category_pgw . "','" . $img_pgw . "')";
        if ($conn->query($log1) == true) {
            $enc = base64_encode(base64_encode ($nip_pgw));
            $log2 = "INSERT INTO m_user (nama_user, username, password, category) VALUES ('" . $nama_pgw . "','" . $nip_pgw . "','" . $enc . "','" . $category_pgw . "')";
        }
        if ($conn->query($log2) == true) {
            $status = '1'; //Berhasil
        }
    }
    else {
        $status = '2'; //Gagal
    }
}
elseif ($act == "editdatapegawai") {
    $log1 = "UPDATE m_pgw SET nama_pgw = '" . $nama_pgw . "', nip_pgw = '" . $nip_pgw . "', pangkat_pgw = '" . $pangkat_pgw . "', jabatan_pgw = '" . $jabatan_pgw . "', unit_kerja_pgw = '" . $unit_kerja_pgw . "', no_telpn_pgw = '" . $no_telpn_pgw . "', alamat_pgw = '" . $alamat_pgw . "', category_pgw = '" . $category_pgw . "', img_pgw = '" . $img_pgw . "' WHERE id_pgw = '" . $id . "'";
            if ($conn->query($log1) == true) {
            $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}
elseif ($act == "deldatapegawai") {
    $log1 = "DELETE FROM `m_pgw` WHERE id_pgw = '" . $id . "'";
    if ($conn->query($log1) == true) {
        $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}

echo $status;
?>