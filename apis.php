<?php
$page = "apis";
include 'header.php';
require __DIR__ . '/conf.php';

function getBtnData($conn){   
    $sql = "SELECT * FROM `pre_order`";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['btn_html'];
}
getBtnData($conn);
?>