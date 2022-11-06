<?php
require 'config.php';
if (isset($_GET['id'])) {
   $id = $_GET['id'];
}

$result = mysqli_query($db, "SELECT * FROM cafe WHERE id='$id'");
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
   $nama = $_POST['nama'];
   $phone = $_POST['phone'];
   $deskripsi = $_POST['deskripsi'];
   $alamat = $_POST['alamat'];

   $gambar = $_FILES['gambar']['name'];
   $x = explode('.', $gambar);
   $extension = strtolower(end($x));
   $gambar_baru = "$nama.$extension";
   $tmp = $_FILES['gambar']['tmp_name'];

   if (move_uploaded_file($tmp, 'pict/' . $gambar_baru)) {
      $result = mysqli_query(
         $db,
         "UPDATE cafe SET 
    nama = '$nama',
    phone = '$phone',
    deskripsi = '$deskripsi',
    alamat = '$alamat',
    gambar      = '$gambar_baru'
    WHERE id = '$id'"
      );

      if (isset($_GET['id'])) {
         $id = $_GET['id'];
      }

      $result = mysqli_query(
         $db,
         "SELECT * FROM akun WHERE id = '$id'"
      );
      $row = mysqli_fetch_array($result);

      if ($result) {
         echo " 
                <script> 
                alert('Updating data has DONE');
                document.location.href = 'adminRill.php';
                </script>
            ";
      } else {
         echo " 
                <script> 
                alert('FAILED Updating Data!');
                </script>
            ";
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
   <title>Admin Page</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/adminRill.css?v2">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <div class="grid-container">
      <!-- Header -->
      <header class="header">
         <div class="menu-icon" onclick="openSidebar()">
            <span><i class="bi bi-list"></i></span>
         </div>
         <div class="header-left">
            <span><i class="bi bi-search"></i></span>
         </div>
         <div class="header-right">
            <a href="./logout.php"><span><i class="bi bi-box-arrow-right" style="font-size: 23px;"></i></span></a>
         </div>
      </header>




      <!-- Sidebar-->
      <aside id="sidebar">
         <div class="sidebar-title">
            <div class="sidebar-brand">
               <img src="./assets/img/logo.png" alt="" width="45%">
            </div>
            <span onclick="closeSidebar()"><i class="bi bi-x-lg"></i></span>
         </div>

         <ul class="sidebar-list">
            <li class="sidebar-list-item">
               <a href="./adminRill.php"><span><i class="bi bi-clipboard-data"></i></span> Dashboard</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminAkun.php"><span><i class="bi bi-person-lines-fill"></i></span> Akun</a>
            </li>
            <li class="sidebar-list-item">
               <a href=""><span><i class="bi bi-chat-square-heart"></i></span> Review</a>
            </li>
         </ul>
      </aside>



      <!-- Main -->
      <main class="main-container">

         <div class="charts">
            <div class="main-title">
               <p class="font-weight-bold" style="text-align: center;">DATABASE CAFE</p>
            </div>
            <div class="boxform">

               <form method="post" enctype="multipart/form-data">
                  <label>Name</label> <br>
                  <input type="text" name="nama" id="nama" value=<?= $row['nama'] ?>>
                  <br><br>

                  <label>Phone</label> <br>
                  <input type="number" name="phone" id="phone" value=<?= $row['phone'] ?>>
                  <br><br>

                  <label>Alamat</label> <br>
                  <input type="text" name="alamat" id="alamat" value=<?= $row['alamat'] ?>>
                  <br><br>

                  <label>Deskripsi</label>
                  <input type="text" name="deskripsi" id="deskripsi" value=<?= $row['deskripsi'] ?>>
                  <br><br>

                  <label>Upload Foto</label><br>
                  <input type="file" name="gambar" value=<?= $row['gambar'] ?>>
                  <br>

                  <button class="btn" type="submit" name="submit">UPDATE</button>
               </form>
            </div>
         </div>
   </div>
   </main>
   </div>



   <!-- Scripts -->
   <script>
      // SIDEBAR TOGGLE

      var sidebarOpen = false;
      var sidebar = document.getElementById("sidebar");

      function openSidebar() {
         if (!sidebarOpen) {
            sidebar.classList.add("sidebar-responsive");
            sidebarOpen = true;
         }
      }

      function closeSidebar() {
         if (sidebarOpen) {
            sidebar.classList.remove("sidebar-responsive");
            sidebarOpen = false;
         }
      }
   </script>
</body>

</html>