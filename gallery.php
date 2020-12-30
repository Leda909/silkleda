<?php
   include_once "header.php";
   include_once "data_model.php";
?>

<!-- Page Content -->
<div class="container bodybox" style="margin-top: 20px; min-height: 1200px;" >
     
      <div class="portfolio-menu mt-2 mb-4">
         <ul>
            <li class="btn btn-outline-dark active" data-filter="*">All</li>
            <li class="btn btn-outline-dark" data-filter="Mandala">Mandala</li>
            <li class="btn btn-outline-dark" data-filter="Picture">Painting</li>
            <li class="btn btn-outline-dark" data-filter="Sewn silk product">Sewn</li>
         </ul>

         <ul id="demo">
         </ul>
      </div>

      <div class="portfolio-item">
         <div class="data-container row">
         </div>
      </div>

</div>


<?php
  include_once "footer.php";
?>