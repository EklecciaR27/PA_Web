<?php
$koneksi = mysqli_connect("localhost", "root", "", "pa_web");
$statistik = query("SELECT * FROM cafe2");

function query($data)
{
   global $koneksi;
   $hasil = mysqli_query($koneksi, $data);
   $rows = [];
   while ($row = mysqli_fetch_assoc($hasil)) {
      $rows[] = $row;
   }

   return $rows;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DB SAFE HOUSE</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/adminRill.css?v1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <div class="grid-container">
      <!-- Header -->
      <header class="header">
         <div class="menu-icon" onclick="openSidebar()">
            <span><i class="bi bi-list" style="font-size: 22px; color: #6a9792"></i></span>
         </div>
         <div class="header-left">
            <span><i class="bi bi-search" style="font-size: 22px; color: #6a9792"></i></span>
         </div>
         <div class="header-right">
            <a href="./logout.php"><span><i class="bi bi-box-arrow-right" style="font-size: 24px; color: #6a9792"></i></span></a>
         </div>
      </header>


      <!-- Sidebar-->
      <aside id="sidebar">
         <div class="sidebar-title">
            <div class="sidebar-brand">
               <img src="./assets/img/logo.png" alt="" width="45%">
            </div>
            <span onclick="closeSidebar()"><i class="bi bi-x-lg" style="font-size: 22px; color: white; padding-right:35px"></i></span>
         </div>

         <ul class="sidebar-list">
            <li class="sidebar-list-item">
               <a href="./adminRill.php"><span><i class="bi bi-clipboard-data" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Dashboard</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminAkun.php"><span><i class="bi bi-person-lines-fill" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Akun</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminReview1.php"><span><i class="bi bi-chat-square-heart" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Review Satu Kata</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminReview2.php"><span><i class="bi bi-chat-square-heart" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Review Safe House</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminReview3.php"><span><i class="bi bi-chat-square-heart" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Review Cetro</a>
            </li>
         </ul>
      </aside>



      <!-- CAFE 2 | SAFE HOUSE -->
      <main class="main-container">
         <div class="main-title">
            <p class="font-weight-bold">DATABASE REVIEW CAFE SAFE HOUSE</p>
         </div>

         <?php
         require 'config.php';
         $result = $db->query("SELECT * FROM cafe2");
         ?>
         <!-- Isi -->
         <div class="charts">
            <div class="charts-card">
               <div>
                  <table cellpadding=16 cellspacing=5>
                     <tr>
                        <th>NO.</th>
                        <th>NAMA</th>
                        <th>TANGGAL</th>
                        <th>RATING</th>
                        <th>PESAN</th>
                        <th>ACTION</th>
                     </tr>
                     <?php $y = 1 ?>
                     <?php foreach ($statistik as $data) : ?>
                        <tr>
                           <td><?php echo $y; ?></td>
                           <td><?php echo $data['nama']; ?></td>
                           <td><?php echo $data["tanggal"]; ?></td>
                           <td><?php echo $data["rating"]; ?></td>
                           <td><?php echo $data["pesan"]; ?></td>
                           <td><a class="bi bi-trash" style="text-align: center; color: #6a9792; font-size: 25px" href="deleteReview2.php?id=<?php echo $data["id"]; ?> "></a></td>
                        </tr>
                        <?php $y++; ?>
                     <?php endforeach; ?>
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