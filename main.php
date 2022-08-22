<?php
$page = "main";
include 'header.php';
require __DIR__ . '/conf.php';


if (!empty($_GET['oauth_token']) && isset($_GET['oauth_token'])) {

    $btn_value = $_POST['btn_value'];
    $btn_bg_color = $_POST['btn_bg_color'];
    $btn_width = $_POST['btn_width'];
    $btn_height = $_POST['btn_height'];
    $border_radius = $_POST['borderRadius'];
    $border_color = $_POST['bordercolor'];
    $border_width = $_POST['borderWidth'];
    $font_color = $_POST['fontColor'];
    $font_size = $_POST['fontSize'];
    $font_family = $_POST['fontFamily'];
    $font_bold = $_POST['fontBold'];
    $font_italic = $_POST['fontItalic'];
    $font_underline = $_POST['fontUnderline'];
    $btn_html = $_POST['btn_html'];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM `pre_order`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) <= 0) {
        $sql = "INSERT INTO `pre_order` (btn_value,btn_bg_color,btn_width,btn_height,border_radius,border_color,border_width,font_color,font_size,font_family,font_bold,font_italic,font_underline,btn_html,created_at,updated_at) VALUES ('$btn_value','$btn_bg_color',$btn_width,$btn_height,$border_radius,'$border_color',$border_width,'$font_color',$font_size,'$font_family','$font_bold','$font_italic','$font_underline',$btn_html,'$created_at','$updated_at')";
    } else {
        $sql = "UPDATE `pre_order` SET btn_value='$btn_value',btn_bg_color='$btn_bg_color',btn_width=$btn_width,btn_height=$btn_height,border_radius=$border_radius,border_color='$border_color',border_width=$border_width,font_color='$font_color',font_size=$font_size,font_family='$font_family',font_bold='$font_bold',font_italic='$font_italic',font_underline='$font_underline',btn_html='$btn_html',updated_at='$updated_at'";
    }
    mysqli_query($conn, $sql);
    echo "Button Saved.";
}else{
    echo "Error";
}


