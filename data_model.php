<?php 
include_once "config.php";

# Here we fetch from "Product" table.
function get_all_products(){

        global $conn;
        $sql = "SELECT * FROM product";

        $result = mysqli_query($conn, $sql);

        $products = [];

        if(mysqli_num_rows($result)> 0){

            while($row = mysqli_fetch_assoc($result)){

                     array_push($products, $row);
            }
        
            return $products;

        } else {
            return false;
        }

}

# Here we select by KEY word for the searching boxes on the web shop side
function get_products_by_keyword($keyword){
    global $conn;

    if($keyword == "Mandala" || $keyword == "Picture"){
        $sql = "SELECT * FROM product WHERE product_category='$keyword' ";
    }

    if($keyword == "Window picture"  || $keyword == "Wall picture" | $keyword == "Sewn silk product"){
        $sql = "SELECT * FROM product WHERE product_type='$keyword' ";
    }
   
    $result = mysqli_query($conn, $sql);
    $product = [];

    if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        array_push($product, $row);
    }
        return $product;

    } else {
        return false;
    }
}

# Here we fetch from "Product" table to "Single product page"
function get_product_by_id($product_id){

    global $conn;
    $sql = "SELECT * FROM product WHERE product_id='$product_id' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)> 0){

        $product = mysqli_fetch_assoc($result);

        return $product;

    } else {
        return false;
    }  
}

# Here we fetch from "Gallery" table.
function get_all_gallery(){

    global $conn;
    $sql = "SELECT * FROM gallery";

    $result = mysqli_query($conn, $sql);

    $products = [];

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
                 array_push($products, $row);
        }
        return $products;

    } else {
        return false;
    }
}


# -----------------------FETCH CART TABLE----------------------------#
# If record for the product found in the database then 
# it will increase Quantity of that product by 1 else it will insert the a new row

function add_to_cart($product_id){
	global $conn;
	$sql = "SELECT * FROM cart WHERE product_id = '$product_id' ";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) >= 1 ){
		return false;
		  
	}  else {
		$sql = "INSERT INTO cart(product_id, quantity)
				VALUES('$product_id',1)";
		mysqli_query($conn, $sql);
       if(mysqli_affected_rows($conn)>0){
		  return true;
	   } else {
		 return false;
	   }			  
	}
}
# ---------------------END------------------------------#
#-------------------------------------------------------#



# -----------------------START CART FUNCTIONS----------------------------#
#----------------------------------------------------#

function get_cart_details(){

	global $conn;
	$sql = "SELECT 
                product.product_id,
				product.product_title, 
				product.product_category,
				product.product_type,
                product.product_price,
                product.product_size,
                product.product_image,
				cart.product_id,
				cart.quantity, 
				(product.product_price * cart.quantity) as Total
		FROM cart, product
		WHERE product.product_id = cart.product_id";

	$result = mysqli_query($conn, $sql);
	
	
	$cart_arr = [];

	if(mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			array_push($cart_arr, $row);
		}
		return $cart_arr;
	}
}


function update_cart($product_id,$quantity){
	global $conn;
	$sql = "UPDATE cart
	SET quantity = '$quantity'
	WHERE product_id = '$product_id' ";
	mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0 ){
		return true;
	 } else {
	   return false;
	 }
}

function delete_item_from_cart($product_id){
	global $conn;

	$sql = "DELETE FROM cart
			WHERE product_id = '$product_id' ";
	mysqlI_query($conn, $sql);

	if(mysqli_affected_rows($conn)>0){
		return true;
	 } else {
	   return false;
	 }
}

function get_total($quantity, $price){
	$total_amount = $quantity * $price;
	return $total_amount;
}

function add_vat($total_amount,$percentage){
	$percentage = $percentage /100;
	return $total_amount + ($total_amount * $percentage );
}

function apply_discount($total_amount, $percentage){
	$percentage = $percentage /100;
	return $total_amount - ($total_amount * $percentage );
}
# ---------------------END CART FUNCTIONS------------------------------#
?>