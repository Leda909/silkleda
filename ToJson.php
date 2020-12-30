<?php
ob_start();
include_once "data_model.php";

$galleries = get_all_gallery();
header('Content-type:application/json;charset=utf-8');

$list = array();

foreach ($galleries AS $item){
    $myObj = new \stdClass();
    
    $myObj->product_id = $item['product_id'];
    $myObj->product_category = $item['product_category'];
    $myObj->product_type = $item['product_type'];
    $myObj->product_image = $item['product_image'];
    $myObj->product_title = $item['product_title'];

    array_push($list,$myObj);   
}

$myJSON_G = json_encode($list);

echo $myJSON_G;

?>