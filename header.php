<?php
ob_start();
include_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Personal art portfolio, silk painitng technic">
  <meta name="keywords" content="silk art, silk painitng, mandala, sewn silk product, silk gift, handcraft,">
  <meta name="rights" content="Z Adél Komeiner">

  <title>Silk Leda</title>

  <!-- Favicon picture -->
  <link rel='icon' href='favicon.ico' type='image/x-icon'/ >

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Gallery styles for Isotope filter magical gallery template -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Gallery Custom styles for Isotope filter magical gallery template -->
  <link rel="stylesheet" href="css/gallery_stylesheet.css">

  <!-- Icons - Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> 

  <!-- Custom styles by me -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="container" >
      <a class="navbar-brand md-auto" href="index.php" style="font-weight: bold; font-size:20px;">Silk Leda</a>
      <div class="cart-section md-auto">
          <a  class="btn btn-success btn-lg md-auto" href="cart.php">  <!-- Start of cart -->
                    <i class="fa fa-shopping-cart"></i>  
                    <span class="badge badge-light">
                    <?php
                    $sql = "SELECT SUM(quantity) AS total_item FROM cart";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
              
                    if($row['total_item']!= NULL){
                      echo "<b>".$row['total_item']."</b>" ;} 
                      else {
                      echo "0";}
                    ?> 
                    </span>
          </a>            
          <a class="btn btn-success btn-lg md-auto"  href="login.php">  <!-- Log in -->
          <i class="fas fa-user"> in</i>
          </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      
      <div class="collapse navbar-collapse" id="navbarResponsive"> <!-- Drop down Nav bar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link snavbar" href="index.php" style="font-weight:bold;">About
            </a>
          </li>
          <li class="nav-item snavbar">
            <a class="nav-link" href="gallery.php" style="font-weight:bold;">Gallery</a>
          </li>
          <li class="nav-item snavbar">
            <a class="nav-link" href="webshop.php" style="font-weight:bold;">Web shop</a>
          </li>
          <li class="nav-item snavbar">
            <a class="nav-link" href="contact.php" style="font-weight:bold;">Contact</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>