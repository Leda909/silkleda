<?php
include_once 'config.php';
include_once 'gallery_class.php';

function get_item_by_keyword($keyword){
	global $conn;
    
	$sql = "SELECT * FROM gallery WHERE '".$keyword."' IN (product_category, product_type)";
			
	$result = mysqli_query($conn, $sql);
    $galleries = [];

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            array_push($galleries, $row);
        }
        return $galleries;
    } else {
        return false;
    }
}

    // SELECT * FROM gallery WHERE `product_category`='Wall picture' OR `product_type`='Wall picture'
    // SELECT * FROM gallery WHERE 'Wall picture' IN (`product_category`, `product_type`)
    // SELECT * FROM gallery WHERE 'Sewn silk product' IN (`product_category`, `product_type`)
?>