<?php
   include_once "header.php";
   include_once "data_model.php";
?>

<!-- Page Content -->
<div class="bodybox container" style="margin-top: 17px; height: auto;" >
     
      <div class="portfolio-menu mt-2 mb-4">
         <ul>
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <!-- Nem kell pont a mandala és painting elött -->
            <li class="btn btn-outline-dark" data-filter=".Mandala">Mandala</li>
            <li class="btn btn-outline-dark" data-filter=".Picture">Painting</li>
         </ul>

         <ul id="demo"> <!-- Pagination controller -->
         </ul>
      </div>

      <div class="portfolio-item"> <!-- for loop for call back function from custom_gallery.js-->
         <div class="data-container row">
         </div>
      </div>

</div>


<?php
  include_once "footer.php";
?>