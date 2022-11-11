<?php
session_start();
require 'config.php';

if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query =  "SELECT * FROM akun 
            WHERE username = '$username'
            OR email = '$username'";

   $result = $db->query($query);

   $row = mysqli_fetch_array($result);

   // jadi ini ngecek apakah var password itu sama dengan yang di db akun yaitu psw
   if (password_verify($password, $row['psw'])) {
      $_SESSION['login'] = true;
      if ($row['level'] == 'admin') {
         echo "<script>
                alert('Welcome, $username');
                document.location.href='adminRill.php';
                </script>";
      } else {
         echo "<script>
                alert('Welcome, $username');
                document.location.href='cafeUser.php';
                </script>";
      }
   } else {
      echo "<script>
                alert('Username dan password salah');
             </script>";
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOGIN</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/index.css?v1">
   <link rel="stylesheet" href="./assets/css/logreg.css?v1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <!-------------- NAVBAR -------------->
   <header class="header">
      <!-- Logo Cafe Rebyu -->
      <a href="#" class="logo"><img src="./assets/img/logo.png" alt="" style="width: 40%;"></a>

      <div class="icons">
         <div class="bi bi-list" id="menu-btn" style="font-size: 18px;"></div>
         <nav class="navbar">
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
         </nav>
      </div>
   </header>

   <!-------------- LOGIN -------------->
   <div class="container">
      <div class="forms">
         <div class="form login">
            <p class="title" style="text-align: center;">Login</p>

            <form action="" method="post">
               <div class="input-field">
                  <input type="text" placeholder="Email/Username" name="username" required>
                  <i class="bi bi-person"></i>
               </div>
               <div class="input-field">
                  <input type="password" class="password" placeholder="Password" name="password" required>
                  <i class="bi bi-lock"></i>
               </div>

               <div class="input-field button">
                  <input type="submit" name="login" id="login" value="Login">
               </div>
            </form>

            <div class="login-signup">
               <span class="text">Belum punya akun?
                  <a href="./register.php" style="color: #6a9792;">Register</a>
               </span>
            </div>
         </div>
      </div>
   </div>
</body>



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



</html>