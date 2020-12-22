<?php
   include_once "header.php";
   include_once "data_model.php";
   include_once "gallery_page.php";

   if(isset($_GET['page'])){
         $page=$_GET['page'];
      } else{
         $page=1;
      }
   $images_page = get_all_gallery($page);
   $next_page=$page+1;
   $back_page=$page-1;
   $sum_page=$images_page->get_sum_page();
?>

<!-- Page Content -->
<div class="bodybox container" style="margin-top: 17px; height: auto;" >
     
      <div class="portfolio-menu mt-2 mb-4">
         <ul> <!-- Selector by class == product_category -->
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <li class="btn btn-outline-dark" data-filter=".Mandala">Mandala</li>
            <li class="btn btn-outline-dark" data-filter=".Picture">Painting</li>
         </ul>
         <ul>  <!-- Pagination controler -->
            <?php if ($page>1){ ?>
               <a href="?page=<?=$back_page ;?>"><i class="fas fa-angle-double-left"></i></a>
            <?php } ?>
               <li style="padding:0 15px;"><?=$page;?> / <?=$sum_page;?> Page</li>
            <?php if ($page<$sum_page){?>
               <a href="?page=<?=$next_page ;?>"><i class="fas fa-angle-double-right"></i></a>
            <?php }?>
         </ul>
      </div>

      <div class="portfolio-item row"> 
         <!-- Start of For loop -->
         <?php 
         foreach($images_page->get_images() AS $tumbl){ 
            $product_id = $tumbl['product_id'];
            $product_category = $tumbl['product_category'];
            $product_type = $tumbl['product_type'];
            $product_image = $tumbl['product_image'];
            $product_title = $tumbl['product_title'];   
         ?>

         <div class="item <?=$product_category ;?> col-lg-3 col-md-4 col-6 col-sm">
            <a href="images/<?=$product_image ;?>" class="fancylight popup-btn" data-fancybox-group="light"> 
            <img class="img-fluid" src="images/tumbl_<?=$tumbl['product_image'] ;?>" alt=" <?=$product_title ;?>">
            <p style="background-color:#987fa6; color:white; font-size:20px; text-align:center;"><?=$product_title ;?></p> 
            </a>
         </div>  
         <?php }?> <!-- End of For loop -->

      </div>

</div>


<?php
  include_once "footer.php";
?>