<?php
  include_once "header.php";
  include_once "data_model.php";

  if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $product = get_product_by_id($product_id);
    extract($product);

  } else {
    echo "Sorry this product out of stock";
  }

  # Here we handle The add to cart button click here
  $msg = "";
  if(isset($_POST['btn_cart'])){

    $product_id = $_POST['product_id'];
  
      if(add_to_cart($product_id)){
      $msg = "success";
      } else {
        $msg = "error_db";	
      }
  }
?>

<!-- Start of Page Content -->
<div class="col-sm-8" style="padding-top:10px; padding-bottom:30px; height: auto; margin-left:auto; margin-right:auto;">

  <h3 id="ssingle_product_title"><?=$product_title;?></h3> <!-- Title -->
      
  <div class="row" id="ssingle_product_row">

    <div class="col-sm-5" style="padding-top:10px;"> <!-- Image's Block -->
      <img src="images/<?=$product_image?>" class="img-responsive" style="width:100%; height: 380px;" alt="Image">
    </div>
        
    <div class="col-sm-7" > <!-- Start of the Table -->
      <div class="container">
        <div class="row">
          <table class="table table-bordered" style="border-collapse: collapse;">
            <tr>
              <td class="tdhead" style=" width: 20%;">Category:</td>
              <td><?=$product_category ;?></td>
            </tr>
            <tr>
              <td class="tdhead">Type:</td>
              <td><?=$product_type ;?></td>
            </tr>
            <tr>
              <td class="tdhead">Size:</td>
              <td><?=$product_size ;?> cm</td>
            </tr>
            <tr>
              <td class="tdhead">Price:</td>
              <td>£ <?=$product_price ;?></td>
            </tr>
            <tr>
              <td class="tdhead">Descreption:</td>
              <td style="text-align: justify;"><?=$product_description ;?></td>
            </tr>
            <tr> 
              <td colspan="2">&nbsp;  <!-- Here we add the "cart's message." -->
                <?php 
                      if(isset($msg)){
                        if($msg =="success"){
                          echo "<div style='float:right;color:green;font-weight:bold;'>Item added to the cart!</div>";
                        } else if($msg =="error_db"){
                          echo "<div style='float:right;color:red;font-weight:bold;'>You already added this item!</div>";
                        }
                      }
                ?>
              </td>
            </tr>
            <tr> <!-- Buttons -->
              <td><a href="webshop.php"><button  class='btn btn-primary btn-success'>Back to shop</button></a></td>
              <form action="" method="post">
                <input type="hidden" name="product_id" value="<?= $product_id; ?>">
                  <td><input type='submit'  class='btn btn-primary btn-success' name='btn_cart' value='Add to Cart' ></td>
              </form>
            </tr>
          </table>
        </div>
      </div>  
    </div><!-- End of of Table> -->  
  
  </div>
</div> <!-- End of Page Content -->


<?php
  include_once "footer.php";
?>