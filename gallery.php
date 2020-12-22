<?php
  include_once "header.php";
  include_once "data_model.php";

  $products = get_all_gallery();
?>

<style>
.pag {
   text-align: center;
   color: #6a4680;
}
.btn_pag {
    background-color: #987fa6;
    padding: 7px 14px 9px 14px;
    color: white;
    border-radius: 50%;
}
.btn_pag:hover {
   color: white;
   text-decoration: none;
   background-color: #6a4680;
}
</style>

<!-- Page Content -->
<div class="container bodybox" style="margin-top: 20px; height: auto;" >
     
      <div class="portfolio-menu mt-2 mb-4">
         <ul>
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <li class="btn btn-outline-dark" data-filter=".Mandala">Mandala</li>
            <li class="btn btn-outline-dark" data-filter=".Picture">Painting</li>
         </ul>
      </div>

      <div class="portfolio-item row">
         
         <?php 
         foreach($galleries AS $tumbl){ 
            $product_id = $tumbl['product_id'];
            $product_category = $tumbl['product_category'];
            $product_type = $tumbl['product_type'];
            $product_image = $tumbl['product_image'];
            $product_title = $tumbl['product_title'];   
         ?>

         <div class="item <?=$product_category ;?> col-lg-3 col-md-4 col-6 col-sm">
            <a href="images/<?=$product_image ;?>" class="fancylight popup-btn" data-fancybox-group="light"> 
            <img class="img-fluid" src="images/tumbl_<?=$product_image ;?>" alt=" <?=$product_title ;?>">
            <p style="background-color:#987fa6; color:white; font-size:20px; text-align:center;"><?=$product_title ;?></p> 
            </a>
         </div>  
         <?php }?> 

      </div>

      <div class="pag">
         <!-- <a  href="?page=galleries&current_page_number=1">FIRST</a>  -->
         <a class="btn_pag" href="?page=galleries&current_page_number=<?php echo ($current_page_number > 1 ? ($current_page_number - 1) : 1 )?>" style="margin-right:10px;">&laquo;</a> 
         <span><?php echo $current_page_number; ?></span> / <span><?php echo $total_number_of_pages; ?> Page</span> 
         <a class="btn_pag" href="?page=galleries&current_page_number=<?php echo ( ($current_page_number < $total_number_of_pages) ? ($current_page_number + 1) : $total_number_of_pages )?>" style="margin-left:10px;">&raquo;</a> 
         <!-- <a href="?page=galleries&current_page_number=<?php echo $total_number_of_pages; ?>">LAST</a> -->
      </div>

      <!-- <div class="pag" style="margin-top: 15px;">
         <a class="btn_pag" href="?page=products&current_page_number=1">&laquo;</a> 
            <?php # Let's split our $total_number_of_pages using a for loop
                  for($i=1; $i <= $total_number_of_pages; $i++){
                     echo "&nbsp;<a class='btn_pag' href=?page=products&current_page_number=$i> $i  </a>&nbsp;";	  
                  }?>
         <a class="btn_pag" href="?page=products&current_page_number=<?php echo $total_number_of_pages; ?>">&raquo;</a>
      </div>

      <div class="pag" style="margin-top: 15px;">
         <a  href="?page=products&current_page_number=1">&laquo;</a> 
            <?php # Let's split our $total_number_of_pages using a for loop
               for($i=1; $i <= $total_number_of_pages; $i++){
                     # If $_GET is set with current_page_number and current_page_number == value of $i then we want to add "active" CSS class for that 
                     if(isset($_GET['current_page_number']) && $_GET['current_page_number']==$i){
                        $selected = "active";
                     
                        # If $_GET is NOT set with current_page_number and $i== 1 then we want to add "active" CSS for the (the first record)
                        } elseif(!isset($_GET['current_page_number']) && $i==1){
                           $selected = "active";
                           
                              } else {
                                 $selected = "none";
                              }
                     echo "&nbsp;<a class=$selected href=?page=products&current_page_number=$i>$i</a>&nbsp;";	  
               }?>
         <a href="?page=products&current_page_number=<?php echo $total_number_of_pages; ?>">&raquo;</a>
      </div> -->
      
</div>


<?php
  include_once "footer.php";
?>