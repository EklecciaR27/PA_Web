<?php
require 'config.php';
if (isset($_POST['regis'])) {
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $konfirmasi = $_POST['konfirmasi'];

   // Cek username telah digunakan atau belum
   $user = $db->query("SELECT * FROM akun WHERE username='$username'");

   if (mysqli_num_rows($user) > 0) {
      echo "<script>
            alert('username telah digunakan silakan gunakan username lain');
            </script>";
   } else {
      // Konfirmasi password sudah benar atau belum
      if ($password == $konfirmasi) {
         $password = password_hash($password, PASSWORD_DEFAULT);
         $query = "INSERT INTO akun(email,username,psw)
                VALUES ('$email', '$username', '$password')";
         $result = $db->query($query);

         if ($result) {
            echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href='login.php'; 
                    </script>";
         } else {
            echo "<script>
                    alert('Registrasi Gagal');
                    </script>";
         }
      } else {
         echo "<script>
                alert('Konfirmasi Pass Salah!');
                </script>";
      }
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>REGISTER</title>

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

   <!-------------- REGIS -------------->
   <div class="container-reg">
      <div class="forms">
         <div class="form login">
            <p class="title" style="text-align: center;">Registration</p>

            <form action="" method="post">
               <div class="input-field">
                  <input type="text" name="email" placeholder="Email" required>
                  <i class="bi bi-envelope"></i>
               </div>
               <div class="input-field">
                  <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                  <i class="bi bi-person"></i>
               </div>
               <div class="input-field">
                  <input type="password" name="password" class="password" placeholder="Password" required>
                  <i class="bi bi-lock"></i>
               </div>
               <div class="input-field">
                  <input type="password" name="konfirmasi" class="password" placeholder="Confirm Password" required>
                  <i class="bi bi-lock"></i>
               </div>
               <div class="input-field button">
                  <input type="submit" name="regis" value="Regist">
               </div>
            </form>

            <div class="login-signup">
               <span class="text">Sudah punya akun?
                  <a href="./login.php" style="color: #6a9792;">Login</a>
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