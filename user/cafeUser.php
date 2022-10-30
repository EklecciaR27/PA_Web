<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Review Cafe</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/cafeUser.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <!-- header section starts  -->
   <header class="header">
      <!-- kasi gambar -->
      <a href="#" class="logo"> Ripia Ripiuw </a>

      <nav class="navbar">
         <a href="#home">Home</a>
         <a href="#review">Review</a>
         <a href="#products">About Us</a>
         <a href="#logout">Logout</a>
      </nav>
      <div class="icons">
         <div class="bi bi-list" id="menu-btn"></div>
         <!-- <div class="bi bi-box-arrow-right" id="log-out"></div> -->
      </div>

   </header>
   <!-- header section ends -->





   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="home-content">
         <h2>Explore Cafe in Town</h2>
         <div class="line"></div>
         <h1>REVIEW CAFE KIW</h1>
         <a class="ctn" href="#">Sign In</a>

      </div>

   </section>

   <!-- home section ends -->

   <!-- Cafe Page -->
   <section class="cafe-page" id="review">
      <div class="title">
         <h1>Top 3 Cafe In Samarinda</h1>
         <div class="line"></div>
      </div>
      <!-- Gambar Cafenya -->
      <div class="row">
         <div class="col">
            <img src="./assets/img/cafeCetro2.png " alt="" style="width: 70%;">
            <h4>Cafe Cetro</h4>
            <p>Buat kalian yang aesthetic banget anaknya, buruan kepoin deh!</p>
            <a class="ctn" href="#">Review</a>
         </div>
         <div class="col">
            <img src="./assets/img/cafeSH2.png" alt=""style="width: 70%;">
            <h4>Cafe Safe House</h4>
            <p>Blalalallalala alskakshajkd skdshkjxl jsakx</p>
            <a class="ctn" href="#">Review</a>
         </div>
         <div class="col">
            <img src="./assets/img/cafeSatuKata3.png" alt=""style="width: 70%;">
            <h4>Cafe Satu Kata</h4>
            <p>Blalalallalala alskakshajkd skdshkjxl jsakx</p>
            <a class="ctn" href="#">Review</a>
         </div>
      </div>
   </section>


   <!-- Footer -->
   <section class="footer">
      <p>Gunung Kelua Universitas Mulawarman, Indonesia | Phone: 6282 0182 8219 | E-mail: contact awokwi@gmail.com</p>
      <p>Copyright © 2022 Praktikum Web </p>
   </section>





   <!-- JS | Buat hide menu button mobile -->
   <script>
      let navbar = document.querySelector('.navbar');

      document.querySelector('#menu-btn').onclick = () => {
         navbar.classList.toggle('active');
         searchForm.classList.remove('active');
         shoppingCart.classList.remove('active');
         loginForm.classList.remove('active');
      }
   </script>

</body>

</html>