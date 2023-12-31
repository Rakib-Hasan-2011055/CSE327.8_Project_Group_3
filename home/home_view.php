<?php 

include 'home_model.php';
include '../components/wishlist_cart.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Favicon -->
    <!-- Swiper Link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico"> -->
    <!--- Font Awesome Plug-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--- CSS Link-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    

<?php  /// Home Page Product Slider
  include '../components/user_header.php';
  ?>

  <div class="home-bg">
  <section class="home">

    <div class="swiper home-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
            <img src="../images/home-img-1.png" alt="">
        </div>
        <div class="content">
            <span>upto 50% off</span>
            <h3> Smartphones</h3>
            <a href="../shop.php" class="btn">Buy now</a>
        </div>
   </div>


   <div class="swiper-slide slide">
      <div class="image">
         <img src="../images/home-img-2.png" alt="">
      </div>
      <div class="content">
         <span>upto 35% off</span>
         <h3> Watches</h3>
         <a href="../shop.php" class="btn">Buy now</a>
      </div>
   </div>


   <div class="swiper-slide slide">
      <div class="image">
         <img src="../images/home-img-3.png" alt="">
      </div>
      <div class="content">
         <span>upto 50% off</span>
         <h3> Headsets</h3>
         <a href="../shop.php" class="btn">Buy now</a>
      </div>
   </div>

</div>

   <div class="swiper-pagination"></div>

</div>

</section>

</div>




  </div>
  
 <!-- Home Category Section start-->
<<section class="category">

<h1 class="heading">Shop by category</h1>

<div class="swiper category-slider">

<div class="swiper-wrapper">

<a href="../category/category_view.php?category=laptop" class="swiper-slide slide">
   <img src="../images/icon-1.png" alt="">
   <h3>Laptops</h3>
</a>

<a href="../category/category_view.php?category=tv" class="swiper-slide slide">
   <img src="../images/icon-2.png" alt="">
   <h3>Television</h3>
</a>

<a href="../category/category_view.php?category=camera" class="swiper-slide slide">
   <img src="../images/icon-3.png" alt="">
   <h3>Cameras</h3>
</a>

<a href="../category/category_view.php?category=mouse" class="swiper-slide slide">
   <img src="../images/icon-4.png" alt="">
   <h3>Mouse</h3>
</a>

<a href="../category/category_view.php?category=fridge" class="swiper-slide slide">
   <img src="../images/icon-5.png" alt="">
   <h3>Refrigerators</h3>
</a>

<a href="../category/category_view.php?category=washing" class="swiper-slide slide">
   <img src="../images/icon-6.png" alt="">
   <h3>Washing Machines</h3>
</a>

<a href="../category/category_view.php?category=smartphone" class="swiper-slide slide">
   <img src="../images/icon-7.png" alt="">
   <h3>Smartphones</h3>
</a>

<a href="../category/category_view.php?category=watch" class="swiper-slide slide">
   <img src="../images/icon-8.png" alt="">
   <h3>Watch</h3>
</a>

</div>

<div class="swiper-pagination"></div>

</div>

</section>

 <!-- Home Category Section ends-->

  <!-- Home Products Section-->


<section class="home-products">
<h1 class="heading">Latest Products</h1>

   <div class="swiper products-slider">

      <div class="swiper-wrapper">

     
        <?php
        include 'home_controller.php';

        ?>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
    <!-- Home Products Section ends-->


<?php include '../components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
 <script> // sliding function
    var swiper = new Swiper(".home-slider", {
   loop:true,
   //spaceBetween: 20,      
   grabCursor: true,
   
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

var swiper = new Swiper(".category-slider", { // sliding function for categories
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", { // sliding function for products
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
         slidesPerView: 2,
       },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

 </script>
   <!----- JS Link -->
   <script src="../js/script.js"></script> 


</body>
</html>