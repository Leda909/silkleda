<?php
ob_start();
include_once 'data_model_search.php';
include_once 'data_model.php';

header('Content-type:application/json;charset=utf-8');

if(isset($_GET['keyword'])){
      $keyword = $_GET['keyword'];
      if (isset($keyword) && $keyword == '*'){
        $search_gallery = get_all_gallery();
      } elseif (isset($keyword) && $keyword !== ''){
        $search_gallery = get_item_by_keyword($keyword);
      } else {
        echo json_encode(array("message" => "Please, give a keyword."));
        return;
      }
  } else {
    $search_gallery = get_all_gallery();
}

if($search_gallery){
    $myJSON_G_I = json_encode($search_gallery);
    echo $myJSON_G_I;
    } else {
        http_response_code(404);
        // tell the user product does not exist
        echo json_encode(array("message" => "Product does not exist."));
    }
?>