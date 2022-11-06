<!-- Read Cafe -->
<?php
$koneksi = mysqli_connect("localhost", "root", "", "pa_web");
$statistik = query("SELECT * FROM cafe WHERE id = '2'");

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

<!-- Input Komentar -->
<?php
require 'config.php';

if (isset($_POST["submit"])) {
   $nama = $_POST["nama"];
   $tanggal = $_POST["tanggal"];
   $rating = $_POST["rating"];
   $pesan = $_POST["pesan"];
   $result = mysqli_query($db, "INSERT INTO cafe2 (tanggal,rating,pesan,nama) VALUES ('$tanggal','$rating','$pesan', '$nama')");
   if ($result) {
      echo
      "
            <script>
                alert('Data Berhasil Ditambahkan!'); 
                document.location.href = 'userReview2.php' ;
            </script>
        ";
   } else {
      echo
      "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'UserReview2.php';
            </script>
        ";
   }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SAFE HOUSE</title>

   <!-- CONNECT -->
   <link rel="stylesheet" href="./assets/css/about.css?v1">
   <link rel="stylesheet" href="./assets/css/reviewUser.css">
   <link rel="stylesheet" href="./assets/css/userReview.css?v1">
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
            <a href="./cafeUser.php">Home</a>
            <a href="./cafeUser.php">Review</a>
            <a href="./cafeUser.php">About Us</a>
            <a href="./logout.php">Logout</a>
         </nav>
      </div>
   </header>

   <!-------------- CAFE REVIEW -------------->
   <?php foreach ($statistik as $data) : ?>
      <section class="about-section">
         <div class="title">
            <h1><?php echo $data['nama']; ?></h1>
            <div class="line"></div>
         </div>
         <br><br>

         <!-------------- DATA CAFE -------------->
         <div class="about-kotak">
            <div class="about-kotak-row">
               <div class="about-kotak-col">
                  <div class="about-img">
                     <p>
                        <img src="img/<?= $data['gambar'] ?>" alt="" width="450px">
                        <!-- <img src="./assets/img/cafe-img1.png" width="70%" alt=""> -->
                     </p>
                  </div>
               </div>
               <div class="about-kotak-col">
                  <div class="about">
                     <p>
                     <div class="text">
                        <div class="alamat">
                           <i class="bi bi-house-heart-fill" style="padding-right: 25px;font-size: 25px;"></i>
                           <?php echo $data["alamat"]; ?>
                        </div>

                        <div class="phone">
                           <i class="bi bi-telephone-forward" style="padding-right: 25px;font-size: 25px;"></i>
                           <?php echo $data["phone"]; ?>
                        </div>
                        <div class="desc">
                           <i class="bi bi-blockquote-left" style="padding-right: 25px;font-size: 25px;"></i>
                           <?php echo $data["deskripsi"]; ?>
                        </div>
                     </div>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <!-------------- REVIEW ORANG -------------->
      <section class="user-review">
         <div class="title">
            <h1>What people say?</h1>
            <div class="line"></div>
         </div><br>

         <?php
         require 'config.php';
         $result = $db->query("SELECT * FROM cafe2");
         ?>
         <?php foreach ($result as $row) : ?>
            <div class="boxread">
               <div class="kiri">
                  <div class="textread">
                     <div class="namauser">
                        <?php echo $row["nama"]; ?>
                     </div>

                     <div class="tanggal">
                        <?php echo $row["tanggal"]; ?>
                     </div>
                     <div class="ratingdesc">
                        <div class="iconalamat"><i class="bi bi-stars"></i></div>
                        <?php echo $row["rating"]; ?><p>/10</p>
                     </div>

                     <div class="ratingdesc">
                        <div class="iconphone"><i class="bi bi-chat-left-text"></i></i></div>
                        <?php echo $row["pesan"]; ?>
                     </div>

                  </div>
               </div>
            </div>
            <br><br>
         <?php endforeach; ?>


         <!-------------- INPUT REVIEW -------------->
         <section>
            <div class="inputuser">
               <div class="title">
                  <h1>How about you?</h1>
                  <div class="line"></div>
               </div>

               <form action="" method="post">
                  <div class="input-row">
                     <div class="input-group">
                        <label for=""><br>Nama : <br></label>
                        <input type="text" name="nama" required>
                     </div>
                     <div class="input-group">
                        <label for=""><br>Tanggal : <br></label>
                        <input type="date" name="tanggal" required><br>
                     </div>
                  </div>

                  <div class="input-row">
                     <div class="input-group">
                        <label for=""><br>Rating :<br> </label>
                        <input type="number" name="rating" min='1' max='10' required><br>
                     </div>
                     <div class="input-group">
                        <label for="">Message :<br> </label>
                        <textarea type="text" name="pesan" rows="5" placeholder="Type your Review Here"> </textarea>
                     </div>
                  </div>

                  <button type="submit" class="ctn" name="submit" value="submit">Send </button>
               </form>
            </div>
         </section>
      </section>
   <?php endforeach; ?>

   <!-------------- FOOTER -------------->
   <section class="footer">
      <p>Gunung Kelua Universitas Mulawarman, Indonesia | Phone: 6282 0182 8219 | E-mail: contact awokwi@gmail.com</p>
      <p>Copyright © 2022 Praktikum Web </p>
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
      };
   </script>

</body>

</html>