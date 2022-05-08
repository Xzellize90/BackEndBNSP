<?php
include 'config.php';

$sql = "SELECT pinjam.id_p ,pinjam.id_a , anggota.namaanggota, buku.judulbuku, tgl_pinjam, tgl_kembali, status
FROM ((pinjam
INNER JOIN anggota ON pinjam.id_a = anggota.id_a)
INNER JOIN buku ON pinjam.id_b = buku.id_b);";
$result = $connect->query($sql);
if($result->num_rows > 0) {    
    $data = array();
    while($getData = $result->fetch_assoc()) {
        $data[] = $getData;
    }
    echo json_encode(array(
        "success"=>true,
        "data"=> $data,
    ));
} else {
    echo json_encode(array(
        "success"=>false,
        "data"=>[],
    ));
}