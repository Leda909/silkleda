<?php
ob_start();
include_once 'model_gallery.php';
include_once 'data_model_gallery_delete.php';


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");


$data = json_decode(file_get_contents("php://input"));
    $myObj=new Gallery();
    
    $myObj->set_product_id($data->product_id);

    $delete = delete_item_from_gallery($myObj);
    // echo json_encode($myObj);

    if($delete){
        $myJSON_Deleted = json_encode($delete);
        echo json_encode(array("message" => "Product has been successfully deleted."));
        // echo $myJSON_Deleted;
        } else {
             // if unable to delete the item, tell the user
            http_response_code(503);
            echo json_encode(array("message" => "Unable to delete product."));
        }
?>