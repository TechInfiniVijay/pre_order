<?php
$page = "getToken";
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Headers","Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");
$conn = mysqli_connect('localhost', 'root', '12345', 'vijay_preorder_app');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['shop'])) {
    $shop = $_GET['shop'];
    getToken($conn, $shop);
} else {
    echo "Shop Name Dose Not Exist.";
}

function getToken($conn, $shop)
{
    $sql = "SELECT * FROM `main_table` WHERE `shop`='$shop'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}
