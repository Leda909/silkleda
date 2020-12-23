<?php
ob_start();
include_once "data_model_gallery_id.php";

if(isset($_GET['id'])){
    $product_id=$_GET['id'];
    } else{
      $product_id=1;
  }
$gallery = get_gallery_by_id($product_id);
header('Content-type:application/json;charset=utf-8');
if($gallery){
    $myJSON_G_I = json_encode($gallery);
    echo $myJSON_G_I;
    } else {
        http_response_code(404);
        // tell the user product does not exist
        echo json_encode(array("message" => "Product does not exist."));
    }
?>

