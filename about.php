<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dream Day & Wedding Planner-About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php @include 'header.php'; ?>

<section class="about">

  <style>
      
      body {
        font-family: Arial;
  font-size: 17px;
  margin: 0;
  background: url(img/bg3.jpg) no-repeat;
   background-size: cover;
   background-position: center;
   background-attachment: fixed;
          
      }
      .mySlides {
        display: none
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      /* Caption text */
      .text {
        color: #ffffff;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color: #ffffff;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active,
      .dot:hover {
        background-color: #111111;
      }
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev,
        .next,
        .text {
          font-size: 11px
        }
      }
.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


    </style>
  </head>
   <h1 align="center">WELCOME TO DREAM DAY</h1>
<h1 align="center">LITTLE STORY</h1>
  <body>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/wed5.jpg" style="width:100%">
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/wed6.jpg" style="width:100%">
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/wed7.jpg" style="width:100%">
        
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }

          
    </script>
   
  
  <img src="img/wed8.jpg" alt="wedding" style="width:100%">

  
  <div class="content">
    <h1 align="center">Our weddings</h1>
    <div class="a">Before two hearts unite in celebration, a lot goes into preparations. Before the love is declared in public, there are many defining moments of choosing and picking. We at Dream Wedding Planner will create the dream wedding you have always wished for, without a single detail missing. </div>
            <br><br><div class="a">It’s not easy turning your dream wedding into a reality. With today’s hectic lifestyle, many couples and their families do not have time for the detailed planning and work a beautiful wedding of their dream.<br><br> We at Dream Wedding Planner, as the pioneers in Sri Lanka wedding planning work together with you at any stage of the planning process to ensure that your wedding is planned to a perfect, totally enjoyable, stress free and memorable one. After all, it is your wedding. We are there to help you – and to make your day perfect.<br><br>

Our counseling alone would provide you the crème de la crème of the industry specialists within your stipulated options and budget. We will give you the freedom and peace of mind to simply enjoy your magnificent day in complete bliss. </div>
            
          </div>
        </div>
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

<?php @include 'footer.php'; ?>
</body>
</div>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>