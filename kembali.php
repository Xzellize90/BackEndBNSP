<?php
include 'config.php';

$namaanggota = $_POST['namaanggota'];

$sql = "DELETE * FROM pinjam WHERE namaanggota='".$namaanggota."'";
$result = $connect->query($sql);
if($result) {
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
}