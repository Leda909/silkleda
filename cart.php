<?php
include_once "header.php";
include_once "data_model.php";


$cart_arr =get_cart_details();
$grand_total = null;
?>


<div class="container-fluid" style="width:95%;">

<?php 
	if(!empty($cart_arr)){
        foreach($cart_arr as $cart_product){
            $grand_total += $cart_product['Total'];
?>

<div class="row" style="margin-bottom:20px;">
    <div class="col-md-4"  style="height:290px;padding:20px; ">
        <div class="col-md-12"  style="height:250px; text-align:center; background-color: white;padding-top:20px;box-shadow: inset 0 -2px 3px #000000, 0 2px 5px #000000;border-radius: 5px;">
                <img src="images/<?=$cart_product['product_image']?> " style="width:230px; height:180px;"/>
        </div>
    </div>
    <div class="col-md-8"  style="height:290px; padding:20px; margin-right:auto;">
        <div class="col-md-12" style="height:250px;padding-top:20px;background-color: white;box-shadow: inset 0 -2px 3px #000000, 0 2px 5px #000000;border-radius: 5px;">
                <p><b>Title : <?=$cart_product['product_title']?></b><br>
                <b>Price Per Item : &pound; <?=$cart_product['product_price']?></b><br>
               
                
                <p><b>Subtotal : &pound; <?= $cart_product['Total']?></b></p>
                 
                <form method="post">
                <input type="hidden" name="delete_product_id" value="<?=$cart_product['product_id']?>">
                <button type="submit" onclick="return confirm ('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger" style="height:40px;width:100px;font-size:20px;" title="Delete Item" name="delete"> <i class="fa fa-trash"></i></button>
                </form>
        </div>
    </div>
</div>

<?php
	  }	# End of foreach loop
	} else {
		echo "<div class='registered error'>You do not have any item in the basket!<a style='color:purple; background-color:white; margin-left:8px;' href='webshop.php'> Shop Now!  </a></div>";
	} # End of if else 
	
?>

<div class="row" style="margin-bottom:20px;">
    <div class="col-md-12"  style="height:170px;padding:20px;">
        <div class="col-md-12"  style="height:130px;text-align:right;padding-top:20px;background-color: white;box-shadow: inset 0 -2px 3px #000000, 0 2px 5px #000000;border-radius: 5px;">
        
        
        <?php  # Grand Total Section 

         if(!empty($grand_total)){?>
                <b> Grand Total: &pound <?=$grand_total?><br><br>
                <a href="login.php">
                    <button  class="btn btn-primary btn-success btn-lg btn-block" style="float:right;cursor: pointer;width:200px;height:50px;">Go to Checkout </button>
                </a>      
        <?php } ?>
        </div>
    </div>
</div>




<?php
            # Update button submit section.

            if(isset($_POST['update'])){

                    $product_id = $_POST['cart_product_id'];
                    $quantity = $_POST['quantity'];

                    if(update_cart($product_id,$quantity)){
                        header("Location:cart.php");
                    }

            }

            # Delete button submit section.

            if(isset($_POST['delete'])){
                
                    $product_id = $_POST['delete_product_id'];

                    if(delete_item_from_cart($product_id)){
                        header("Location:cart.php");
                    }

            }



  ?>



</div>

<?php
include_once('footer.php');
 ?>
