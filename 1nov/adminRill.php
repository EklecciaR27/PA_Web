<?php
session_start();
// jika $sessionnya sudah ada maka,
if (!isset($_SESSION['login'])) {
   echo "<script>
                alert('Akses ditolak, silakan login terlebih dahulu')
                document.location.href = 'login.php'
            </script>";
};



$koneksi = mysqli_connect("localhost", "root", "", "pa_web");
$statistik = query("SELECT * FROM cafe");


// HITUNG JUMLAH AKUN
$koneksi = mysqli_connect("localhost", "root", "", "pa_web");

$query = "SELECT id FROM akun ORDER BY id";
$query_run = mysqli_query($koneksi, $query);

$row = mysqli_num_rows($query_run);

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


// HITUNG JUMLAH REVIEW1
$query1 = "SELECT id FROM cafe1 ORDER BY id";
$query1_run = mysqli_query($koneksi, $query1);

$row1 = mysqli_num_rows($query1_run);

function query1($data1)
{
   global $koneksi;
   $hasil1 = mysqli_query($koneksi, $data1);
   $rows1 = [];
   while ($row1 = mysqli_fetch_assoc($hasil1)) {
      $rows1[] = $row1;
   }

   return $rows1;
}

// HITUNG JUMLAH REVIEW2
$query2 = "SELECT id FROM cafe2 ORDER BY id";
$query2_run = mysqli_query($koneksi, $query2);

$row2 = mysqli_num_rows($query2_run);

function query2($data2)
{
   global $koneksi;
   $hasil2 = mysqli_query($koneksi, $data2);
   $rows2 = [];
   while ($row2 = mysqli_fetch_assoc($hasil2)) {
      $rows2[] = $row2;
   }

   return $rows2;
}

// HITUNG JUMLAH REVIEW3
$query3 = "SELECT id FROM cafe3 ORDER BY id";
$query3_run = mysqli_query($koneksi, $query3);

$row3 = mysqli_num_rows($query3_run);

function query3($data3)
{
   global $koneksi;
   $hasil3 = mysqli_query($koneksi, $data3);
   $rows3 = [];
   while ($row3 = mysqli_fetch_assoc($hasil3)) {
      $rows3[] = $row3;
   }

   return $rows3;
}

// SEARCH NAMA CAFE
require "config.php";

if (isset($_GET['search'])) {
   $keyword = $_GET['keyword'];
   $query4  = mysqli_query($koneksi, "SELECT * FROM cafe where
   nama        LIKE '%$keyword%'
   ");
} else {
   $query4 = mysqli_query($koneksi, "SELECT * FROM cafe");
}

$cafe = [];
while ($row4 = mysqli_fetch_assoc($query4)) {
   $cafe[] = $row4;
}


?>


<!-------------------------------------ADMIN MAIN------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ADMIN REBYU</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/table.css?v2">
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
               <a href="#"><span><i class="bi bi-clipboard-data" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Dashboard</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminAkun.php"><span><i class="bi bi-person-lines-fill" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Akun</a>
            </li>
            <li class="sidebar-list-item">
               <a href="./adminReview1.php"><span><i class="bi bi-chat-square-heart" style="font-size: 22px; padding-right: 17px; color:white"></i></span> Review</a>
            </li>
         </ul>
      </aside>



      <!-- Main -->
      <main class="main-container">
         <div class="main-title">
            <p class="font-weight-bold">DASHBOARD</p>
         </div>

         <div class="main-cards">

            <div class="card">
               <div class="card-inner">
                  <p class="text-primary">TOTAL AKUN</p>
                  <span><i class="bi bi-person-check" style="color: #6a9792"></i></span>
               </div>
               <span class="text-primary font-weight-bold"><?php echo $row; ?></span>
            </div>

            <div class="card">
               <div class="card-inner">
                  <p class="text-primary">TOTAL REVIEW</p>
                  <span><i class="bi bi-clipboard-data" style="color: #6a9792"></i></span>
               </div>
               <span class="text-primary font-weight-bold"><?php echo $row1 + $row2 + $row3; ?></span>
            </div>
         </div>


         <br>
         <div class="main-title">
            <p class="font-weight-bold" style="text-align: center;">DATABASE CAFE</p>
            <div class="table-header">
               <form action="" method="get">
                  <input type="text" name="keyword" id="keyword" placeholder="Cari nama cafe.." autocomplete="off">
                  <button type="submit" name="search" class="cari"> <i class="bi bi-search" style="font-size: 15px; color: white"></i></button>
               </form>
            </div>
         </div>
         <!-- Isi -->
         <div class="charts" style="overflow-x: auto;">
            <div class="charts-card">
               <table style="border-collapse:collapse;">
                  <thead>
                     <tr style="text-align: justify;">
                        <th width=5%>NO.</th>
                        <th width=10%>NAMA</th>
                        <th width=10%>PHONE</th>
                        <th width=35% >DESKRIPSI</th>
                        <th width=20%>ALAMAT</th>
                        <th>GAMBAR</th>
                        <th  width=8%>ACTION</th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php $y = 1 ?>
                     <?php foreach ($query4 as $data) : ?>
                        <tr style="text-align: justify;">
                           <td><?php echo $y; ?>.</td>
                           <td><?php echo $data['nama']; ?></td>
                           <td><?php echo $data["phone"]; ?></td>
                           <td style="text-align: justify;"><?php echo $data["deskripsi"]; ?></td>
                           <td style="text-align: justify;"><?php echo $data["alamat"]; ?></td>
                           <td><img src="pict/<?= $data['gambar'] ?>" alt="" width="100px"></td>
                           <td><a class="bi bi-pencil-square" style="text-align: center; color: #6a9792; font-size: 25px" href="adminCafeUpdate.php?id=<?php echo $data["id"]; ?> "></a></td>
                        </tr>
                        <?php $y++; ?>
                     <?php endforeach; ?>
                  </tbody>
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