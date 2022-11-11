<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CAFE REBYU</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/index.css?v1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <!-------------- NAVBAR -------------->
   <header class="header">
      <!-- Logo Cafe Rebyu -->
      <a href="#" class="logo"><img src="./assets/img/logo.png" alt="" style="width: 40%;"></a>

      <div class="icons">
         <div class="bi bi-list" id="menu-btn"></div>
         <nav class="navbar">
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
         </nav>
      </div>
   </header>


   <!-------------- HOME -------------->
   <section class="home" id="home">
      <div class="home-content">
         <h2>Explore Cafe in Town</h2>
         <div class="line"></div>
         <h1 style="letter-spacing: 5px;">CAFE REBYU</h1>
         <a class="ctn" href="./login.php">Sign In</a>
      </div>
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