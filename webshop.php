<?php
  include_once "header.php";
  include_once "data_model.php";
  include_once "pagination_class.php";

  # Pagination
  if(isset($_GET['page'])){
    $page=$_GET['page'];
    } else{
      $page=1;
  }

  # Set up the searching block by keyword
  if(isset($_GET['keyword'])){
      $keyword = $_GET['keyword'];
    //   $products = get_products_by_word($keyword );
    } else {
      $keyword='';
      // $products = get_all_products($page);
  }

  $images_page = get_all_products($page, $keyword);
  $next_page=$page+1;
  $back_page=$page-1;
  $sum_page=$images_page->get_sum_page();
?>

<!-- Customized media@ for the 'wshopbtn' bottoms in Tablet's portre view -->
<style> 
@media only screen 
  and (min-device-width: 1024px) 
  and (max-device-width: 1024px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 2) {
    .wshopbtn{
      width:75px;
      padding:5px 2px;
      font-size: 10px;
    }
}
.btn_pag {
  background-color: #987fa6;
  color: #fff;
  padding: 7px 11px;
  border-radius: 1rem;
}
.btn_pag:hover {
  background-color: #6a4680;
}
.btn_pag:active {
  border: 2px solid #734c8a;
}
</style>

<!-- Page Content -->
<div class="navbar navbar-expand-lg navbar-dark"  id="body_part">
  <div class="row" >

    <div class="col-lg-3" > <!-- Start of searching block / Left side -->
      
      <a href="webshop.php?keyword=''" class="list-group-item slist" style="margin-top:20px;">All</a>
      
      <h2 class="my-4" style="color:#6a4680;">Subjects:</h2>
      <div class="list-group" >
        <a href="webshop.php?keyword=Mandala" class="list-group-item slist">Mandala</a>
        <a href="webshop.php?keyword=Picture" class="list-group-item slist">Painting</a>
      </div>

      <h2 class="my-4" style="color:#6a4680;">Formats:</h2>
      <div class="list-group">
        <a href="webshop.php?keyword=Window picture" class="list-group-item slist">Window picture</a>
        <a href="webshop.php?keyword=Wall picture" class="list-group-item slist">Wall picture</a>
        <a href="webshop.php?keyword=Sewn silk product" class="list-group-item slist">Sewn products</a>
      </div>

    </div> <!-- End of searching block / Left side --->
      

    <div class="col-lg-9" style="margin-top: 10px;"> <!-- Main container of the right side-->
      <div class="row portfolio-menu">
        <ul>
            <?php if ($page>1){ ?>
               <a class="btn_pag" href="?page=<?=$back_page ;?>&keyword=<?=$keyword;?>"><i class="fas fa-angle-double-left"></i></a>
            <?php } ?>
               <li style="padding:0 15px; color: #6a4680;"><strong><?=$page;?></strong> / <?=$sum_page;?> Page</li>
            <?php if ($page<$sum_page){?>
               <a class="btn_pag" href="?page=<?=$next_page ;?>&keyword=<?=$keyword;?>"><i class="fas fa-angle-double-right"></i></a>
            <?php }?>
        </ul>
      </div> 
      
      <div class="row">
        
        
        <?php 
          if($images_page->get_images()){
              foreach($images_page->get_images() AS $tumbl){
                $product_id = $tumbl['product_id'];
                $product_title = $tumbl['product_title']; 
                $product_price = $tumbl['product_price'];
                $product_image = $tumbl['product_image'];
            
        ?>
         

        <div class="col-lg-4 col-md-6 mb-4" > <!-- One product's block-->
          <div class="card h-100">
              <img class="card-img-top" src="images/<?= $product_image; ?>" alt="<?= $product_title; ?>"> <!-- image-->
              <div class="card-body" style="height: 168px; "> <!-- texts & buttons block-->
              
                <h4 class="card-title" style="color:#4e335f;"><?= $product_title; ?></h4>
                <h5 style="color:#4e335f;">£ <?= $product_price; ?></h5>

                <!-- Here we handle messages regarding to cart-->
                <?php 
                    if(isset($_GET['action']) && isset($_GET['cart_product_id']) ){
                      $action = $_GET['action'];
                      $cart_product_id = $_GET['cart_product_id'];
                      if($action =="success" && $cart_product_id == $product_id){
                        echo "<div style='float:right;color:green; padding-right: 5px;'>Item added to the cart!</div>";
                      } else if($action =="error_db" && $cart_product_id == $product_id){
                        echo "<div style='float:right;color:red; padding-right: 5px;'>You already added this item!</div>";
                      }
                    }
                ?>
                <!--  Start of buttonS  -->
                <a href="ssingle_product.php?product_id=<?=$product_id;?>"><button class='wshopbtn btn btn-primary btn-success' style="float:left;margin: 2px 10px;position: absolute; left:5%; bottom:6px;">View detail</button></a>
                <!--  End of ssingle page buttonS  -->
                <form action="" method="post"> <!--  Add to cart  -->
                  <input type="hidden" name="product_id" value="<?= $product_id; ?>">
                  <input type='submit'  class='wshopbtn btn btn-primary btn-success' name='btn_cart' value='Add to Cart' style="float:left; margin: 2px 10px; position: absolute; right:5%; bottom:6px;">
                </form>
              </div>  <!-- End of texts & buttons block-->
          </div>
        </div> <!-- End of One product's block-->

            <?php 
                } # End of foreach loop
            } else {

              echo "There are no stocks at the moment!";
            }
            ?>
     
      </div>
    </div> <!-- End of main container of the right side-->

  </div>
</div> <!-- End of Page Content -->
  



<?php
# Here we handle form submit (The add to cart button click)

if(isset($_POST['btn_cart'])){

$product_id = $_POST['product_id'];
		if(add_to_cart($product_id)){
		$msg = "success";
		} else {
			$msg = "error_db";	
		}
		header("Location:webshop.php?action=$msg&cart_product_id=$product_id&page=$page&keyword=$keyword");
}

# Footer
  include_once "footer.php";
?>