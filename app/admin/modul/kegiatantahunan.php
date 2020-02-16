<?php 
require_once '../../config/config.php';
require_once '../../config/session.php'; 

//=============== GET POST VALUE ==============//
$act        = $_POST['act']; 
$id         = $_POST['id']; 

$id_item    = $_POST['id_item']; 
$id_pgw     = $_POST['id_pgw']; 
$waktu      = $_POST['waktu']; 
$kual       = $_POST['kual']; 
$output     = $_POST['output']; 
$kuantitas  = $_POST['kuantitas']; 
$ak         = $_POST['ak']; 
$ktj        = $_POST['ktj']; 
$thn_keg    = $_POST['thn_keg']; 

if($act == "addkegtahunan"){
    $query = "INSERT INTO tahunan VALUES ('', '$id_item', '$ktj', '$ak', '$kual', '$output', '$kuantitas', '$waktu', '0', '$thn_keg')";  
    $sql = mysqli_query($conn, $query); 
    if($sql == true){
        $status = '1'; 
    } else {
        $status = '2'; 
    }
} else if($act == 'datakegtahunan'){
    $qry = "SELECT concat(id_tktj,'#',id_pgw,'#',ktj,'#',ak,'#',quantity,'#',output,'#', mutu,'#',waktu,'#',tahun,'#') as name FROM tahunan WHERE id_tktj='" . $id . "'"; 
    $sql = mysqli_query($conn, $qry);
    $data = mysqli_fetch_array($sql); 
    echo $data['name'];  
} else if($act == 'editkegtahunan'){
    $qry = "UPDATE tahunan SET ktj='".$ktj."', ak='".$ak."', quantity='".$kuantitas."', output='".$output."', mutu='".$kual."', waktu='".$waktu."', tahun='".$thn_keg."' WHERE id_tktj='" . $id . "'";
    $sql = mysqli_query($conn, $qry);
    if($sql == true) $status = '1';  
    else $status ='2'; 
} else if($act == 'deldataitem'){
    $qry = "DELETE FROM tahunan WHERE id_tktj='".$id."'"; 
    if($conn->query($qry) == true){
        $status = '1'; 
    } else $status ='2'; 
}
echo $status;

?>