<?php
  include_once "header.php";
?>


<div class="navbar navbar-expand-lg navbar-dark" id="body_part"> <!-- Start of Top Row-->
  <div class="row"> 

    <div class="col-xl-7" id="index_middle_div" > <!--Start of Slide show -->
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators" style="cursor: pointer;">
            <li data-target="#carouselExampleIndicators"  data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner"  style="border-top-left-radius:15%; border-bottom-right-radius:15%;"role="listbox">
            <div class="carousel-item active" style="border-radius:15%;">
              <img class="d-block img-fluid slideimg"  src="images/szeles2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid slideimg" src="images/group.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid slideimg" src="images/preparation.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid slideimg" src="images/me.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid slideimg" src="images/mandalas.jpg" alt="Fifth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid slideimg" src="images/progress02.jpg" alt="Sixth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid slideimg" src="images/progress01.jpg" alt="Seventh slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div> <!-- End of Slide show-->

    <div class="col-xl-5"> <!-- Start of Right side-->
     
      <div class="row" style="padding:25px;">
      <img src="images/text.jpgg" style="border-top-right-radius:15%; border-bottom-left-radius:15%; width:92%; margin-right:auto; margin-left:auto;">
      </div>

    </div>

  </div> 
</div> <!-- End of Top Row-->

<div class="navbar navbar-expand-lg navbar-dark" id="body_part"> <!-- Start of Bottom Row-->
  <div class="row">
 
    <div class="bioframe col-xl-4" style="margin-left:auto; margin-top:5px;">
      <div class="biography">
        <p style="text-align: justify; font-size: 18px;"><strong style="font-size:25px;">"</strong> Lets joy some glamorous <strong>colours!</strong><br>My works are imbued with the <strong>gaudy, subtle hues</strong> and light contrasts. I love bringing everything together into an <strong>airy, tranquily harmony</strong> within. <strong style="font-size:25px;">"</strong></p>
      </div>
    </div>
  
    <div class="col-xl-3" style="margin-top:5px;"> <!-- Portre -->
      <img class="slideimg d-block" style="width:80%; border-radius:50%; border:5px dashed white; padding:20px;" src="images/portreme.jpg">
    </div>

    <div class="bioframe col-xl-4" style="margin-right:auto; margin-top:5px;">
      <div class="biography">
        <p style="text-align: center; font-size:20px;"><b>EDUCATION:</b></p>
        <a href="http://corvinrajziskola.hu/?lang=en" target="_blank" style="color:white;"><p>Corvin Drawing School</p></a>
        <a href="https://silkmandala.com/" target="_blank"><p>Bozó E Liza - Silk Artist</p></a>
        <a href="http://jelky.hu/" target="_blank"><p>Jelky Andras Vocational High School</p></a>
      </div>
    </div>
 
  </div>
</div>


<?php
  include_once "footer.php";
?>