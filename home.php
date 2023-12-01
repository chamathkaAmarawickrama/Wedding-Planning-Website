<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<?php @include 'header.php'; ?>



<section class="home" id="home">

   <section class="hero">
   <video autoplay loop muted plays-inline class="back-video">
   <source src="mnw.mp4" type="video/mp4" >
   </video>
   </section>

</section>

</div>

<!--Home ends-->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/we.jpeg" alt="">
            <div class="content">
               <h3>photography</h3>
               <p>Do you want the best moments of your wedding? We can give that oppertunity for you.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/service-2.jpg" alt="">
            <div class="content">
               <h3>wedding registory</h3>
               <p>Feel your memorable day with joy!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/kl.jpg" alt="">
            <div class="content">
               <h3>guest list</h3>
               <p>So you can relief of your stress.</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Cherry.jpg" alt="">
            <div class="content">
               <h3>wedding cake</h3>
               <p>Get a memorable and beautiful wedding cake!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/photo.jpg" alt="">
            <div class="content">
               <h3>wedding ceremony</h3>
               <p>Make a special moment!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/isl.jpg" alt="">
            <div class="content">
               <h3>fine dining</h3>
               <p>Enjoy your meals with pleasure!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
<section class="team">

   <h1 class="heading">our team</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/isto.jpg" alt="">
         <h3>Asela Liyanage</h3>
         <p>wedding planner</p>
         <a href="#"> <i class="fas fa-phone"></i> +94707720134 </a><br>
         <a href="#"> <i class="fas fa-envelope"></i> asela@gmail.com </a>
      </div>

      <div class="box">
         <img src="images/studio.jpg" alt="">
         <h3>Shehara Fernando</h3>
         <p>Makeup Artist</p>
        <a href="#"> <i class="fas fa-phone"></i> +94709940034 </a><br>
        <a href="#"> <i class="fas fa-envelope"></i> shehara@gmail.com </a>
      </div>

      <div class="box">
         <img src="images/Screen.png" alt="">
         <h3>Daniel Gomas</h3>
         <p>Photographer</p>
        <a href="#"> <i class="fas fa-phone"></i> +94724576890 </a><br>
        <a href="#"> <i class="fas fa-envelope"></i> daniel@gmail.com </a>
      </div>

      <div class="box">
         <img src="images/Jessica.jpg" alt="">
         <h3>Jenny Lianado</h3>
         <p>Flower Decorator & Event Planner</p>
         <a href="#"> <i class="fas fa-phone"></i> +94776589001 </a><br>
         <a href="#"> <i class="fas fa-envelope"></i> jenny@gmail.com </a>
      
         
   
      </div>

   </div>

</section>


<!--about ends-->




</div>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>


<section class="reviews">

   <h1 class="heading">happy clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/is.jpg" alt="">
            <h3>Amal Perera</h3>
            <p>This Website is not only an amazing talented professional, This is  also such a cool team. They made the whole process of planning my wedding fun and stress free. From every vendor they recommended to every small detail, everything was so amazing. I can't get over of how perfect was my wedding day was!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/im.jpg" alt="">
            <h3>Nayomi Fernando</h3>
            <p>This Website is not only an amazing talented professional, This is  also such a cool team. They made the whole process of planning my wedding fun and stress free. From every vendor they recommended to every small detail, everything was so amazing. I can't get over of how perfect was my wedding day was!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/single.jpg" alt="">
            <h3>John Peris</h3>
            <p>This Website is not only an amazing talented professional, This is  also such a cool team. They made the whole process of planning my wedding fun and stress free. From every vendor they recommended to every small detail, everything was so amazing. I can't get over of how perfect was my wedding day was!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/woman.jpg" alt="">
            <h3>Nathaliya Weerasekara</h3>
            <p>This Website is not only an amazing talented professional, This is  also such a cool team. They made the whole process of planning my wedding fun and stress free. From every vendor they recommended to every small detail, everything was so amazing. I can't get over of how perfect was my wedding day was!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ukl.jpeg" alt="">
            <h3>Rahul Chethaniya</h3>
            <p>This Website is not only an amazing talented professional, This is  also such a cool team. They made the whole process of planning my wedding fun and stress free. From every vendor they recommended to every small detail, everything was so amazing. I can't get over of how perfect was my wedding day was!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/dep.jpg" alt="">
            <h3>Warun Dias</h3>
            <p>This Website is not only an amazing talented professional, This is  also such a cool team. They made the whole process of planning my wedding fun and stress free. From every vendor they recommended to every small detail, everything was so amazing. I can't get over of how perfect was my wedding day was!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<!--pricing ends-->

<!--contact includs : contact.php-->



<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>