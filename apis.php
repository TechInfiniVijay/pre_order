<?php
$page = "apis";
include 'header.php';
require __DIR__ . '/conf.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Headers","Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");
function getBtnData($conn){   
    $sql = "SELECT * FROM `pre_order`";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}
if(isset($_GET['oauth_token'])){
    getBtnData($conn);
}
?>