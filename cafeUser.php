<?php
session_start();
// jika $sessionnya sudah ada maka,
if (!isset($_SESSION['login'])) {
   echo "<script>
            alert('Akses ditolak, silakan login terlebih dahulu')
            document.location.href = 'login.php'
         </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CAFE REBYU</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/cafeUser.css?v1">
   <link rel="stylesheet" href="./assets/css/about.css?v1">
   <link rel="stylesheet" href="./assets/js/cafeUser.js">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <!-------------- NAVBAR -------------->
   <header class="header">
      <!-- kasi gambar -->
      <a href="#" class="logo"><img src="./assets/img/logo.png" alt="" style="width: 36%;"></a>

      <div class="icons">
         <div class="bi bi-list" id="menu-btn"></div>
         <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#review">Review</a>
            <a href="#about">About Us</a>
            <a href="./logout.php">Logout</a>
         </nav>
      </div>
   </header>


   <!-------------- HOME -------------->

   <section class="home" id="home">
      <div class="home-content">
         <h2>Explore Cafe in Town</h2>
         <div class="line"></div>
         <h1 style="letter-spacing: 5px;">CAFE REBYU</h1>
         <a class="ctn" href="#review">Explore</a>
      </div>
   </section>


   <!-------------- CAFE PAGE -------------->
   <section class="cafe-page" id="review">
      <div class="title">
         <h1>Top 3 Cafe In Samarinda</h1>
         <div class="line"></div>
      </div>
      <!-- Gambar Cafenya -->
      <div class="row">
         <div class="col">
            <img src="./assets/img/cafeCetro2.png" alt="" style="width: 70%;">
            <h4>Cafe Cetro</h4>
            <p>Salah satu cafe yang oke banget buat hangout bareng teman, pacar, keluarga, sooo gass!</p>
            <a class="ctn" href="./userReview3.php">Review</a>
         </div>
         <div class="col">
            <img src="./assets/img/cafeSH2.png" alt="" style="width: 70%;">
            <h4>Cafe Safe House</h4>
            <p>Buat kalian yang aesthetic banget anaknya, buruan kepoin deh!</p>
            <a class="ctn" href="./userReview2.php">Review</a>
         </div>
         <div class="col">
            <img src="./assets/img/cafeSatuKata3.png" alt="" style="width: 70%;">
            <h4>Cafe Satu Kata</h4>
            <p>Cafe cozy yang recommended buat yang suka nugas bareng bestie di luar nih guys!</p>
            <a class="ctn" href="./userReview1.php">Review</a>
         </div>
      </div>
   </section>


   <!-------------- ABOUT US (TEAM) -------------->
   <section class="about-section" id="about">
      <div class="title">
         <h1>About Us</h1>
         <div class="line"></div><br>
      </div>
      <div class="about-kotak">
         <div class="about-kotak-row">
            <div class="about-kotak-col">
               <div class="about-img">
                  <p>
                     <img src="./assets/img/cafe-img1.png" width="70%" alt="">
                  </p>
               </div>
            </div>
            <div class="about-kotak-col">
               <div class="about">
                  <p>
                     Website Kafe Rebyu ini merupakan website yang digunakan untuk para cafe lovers yang ingin tahu lebih dalam mengenai 3 top cafe di Samarinda. <br><br>
                     Adapun tujuan pembuatan website ini, yaitu guna memenuhi Projek Akhir dari Praktikum Pemrograman Web.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- OUR TEAM -->
   <section class="team-page">
      <div class="title">
         <h1>Our Team</h1>
         <div class="line"></div><br>
      </div>
      <div class="row">
         <div class="col">
            <img id="foto1" src="./assets/img/ab-ditabw.png" alt="" style="width: 70%;">
            <h4>Agditha Evalyn Lolongan</h4>
            <p>WEB DEVELOPER</p><br>
            <p class="nim">2109106030</p>
         </div>
         <div class="col">
            <img id="foto2" src="./assets/img/ab-ciabw.png" alt="" style="width: 70%;">
            <h4>Ekleccia Reydianto</h4>
            <p>WEB DEVELOPER</p><br>
            <p class="nim">2109106036</p>
         </div>
         <div class="col">
            <img id="foto3" src="./assets/img/ab-nopebw.png" alt="" style="width: 70%;">
            <h4>Novia Indah Ramadhani</h4>
            <p>WEB DEVELOPER</p><br>
            <p class="nim">2109106041</p>
         </div>
      </div>
   </section>



   <!-------------- FOOTER -------------->
   <section class="footer">
      <p>Gunung Kelua Universitas Mulawarman, Indonesia | Phone: 6282 0182 8219 | E-mail: contact awokwi@gmail.com</p>
      <p>Copyright © Kelompok 2 Praktikum Web </p>
   </section>



   <!-- JS -->
   <script>
      // Hide menu mobile
      let navbar = document.querySelector('.navbar');

      document.querySelector('#menu-btn').onclick = () => {
         navbar.classList.toggle('active');
         searchForm.classList.remove('active');
         shoppingCart.classList.remove('active');
         loginForm.classList.remove('active');
      }



      // JS for About gambar
      // Dita
      function layer1() {
         document.getElementById('foto1').src = "./assets/img/ab-dita.png";
      }

      function layer2() {
         document.getElementById('foto1').src = "./assets/img/ab-ditabw.png";
      }
      document.getElementById('foto1').addEventListener('mouseover', layer1);
      document.getElementById('foto1').addEventListener('mouseout', layer2);

      // Cia
      function layer3() {
         document.getElementById('foto2').src = "./assets/img/ab-cia.png";
      }

      function layer4() {
         document.getElementById('foto2').src = "./assets/img/ab-ciabw.png";
      }
      document.getElementById('foto2').addEventListener('mouseover', layer3);
      document.getElementById('foto2').addEventListener('mouseout', layer4);

      // Nopi
      function layer5() {
         document.getElementById('foto3').src = "./assets/img/ab-nope.png";
      }

      function layer6() {
         document.getElementById('foto3').src = "./assets/img/ab-nopebw.png";
      }
      document.getElementById('foto3').addEventListener('mouseover', layer5);
      document.getElementById('foto3').addEventListener('mouseout', layer6);
   </script>

</body>

</html>