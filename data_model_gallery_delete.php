<?php
include_once 'config.php';
include_once 'model_gallery.php';

function delete_item_from_gallery($delete_item){
	global $conn;
    
    // test how able to reach get(s) on the Gallery class
    // $temp=$delete_item->get_product_id();
	
	$sql = "DELETE FROM gallery WHERE product_id='".$delete_item->get_product_id()."'";
	
	mysqlI_query($conn, $sql);

	if(mysqli_affected_rows($conn)>0){
		return true;
	 } else {
		return false;
	 }
}
?>