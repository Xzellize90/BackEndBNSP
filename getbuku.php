<?php
include 'config.php';

$sql = "SELECT judulbuku, status FROM `buku` WHERE status = 0;";
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