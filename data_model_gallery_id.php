<?php 
include_once 'config.php';

# Here we fetch from "Gallery" table by id
function get_gallery_by_id($product_id){

    global $conn;
    $sql = " SELECT * FROM gallery WHERE product_id='$product_id' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)> 0){

        $gallery = mysqli_fetch_assoc($result);

        return $gallery;

    } else {
        return false;
    }  
}

?>