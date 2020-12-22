<?php
  include_once "header.php";
  include_once "data_model.php";

  $products = get_all_gallery();
?>

<!-- Page Content -->
<div class="bodybox container" style="margin-top: 17px; height: auto;" >
     
      <div class="portfolio-menu mt-2 mb-4">
         <ul>
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <li class="btn btn-outline-dark" data-filter=".Mandala">Mandala</li>
            <li class="btn btn-outline-dark" data-filter=".Picture">Painting</li>
         </ul>
      </div>

      <div class="portfolio-item row">
         
         <?php 
         foreach($products AS $product){ 
            $product_id = $product['product_id'];
            $product_category = $product['product_category'];
            $product_type = $product['product_type'];
            $product_image = $product['product_image'];
            $product_title = $product['product_title'];   
         ?>

         <div class="item <?=$product_category ;?> col-lg-3 col-md-4 col-6 col-sm">
            <a href="images/<?=$product_image ;?>" class="fancylight popup-btn" data-fancybox-group="light"> 
            <img class="img-fluid" src="images/<?=$product_image ;?>" alt=" <?=$product_title ;?>">
            <p style="background-color:#987fa6; color:white; font-size:20px; text-align:center;"><?=$product_title ;?></p> 
            </a>
         </div>  
         <?php }?> 

      </div>

</div>


<?php
  include_once "footer.php";
?>