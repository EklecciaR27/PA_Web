<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
   
$result = mysqli_query($db, "SELECT * FROM cafe WHERE id='$id'");
$row = mysqli_fetch_array($result);

if(isset($_POST['submit'])){
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
    $result = mysqli_query($db,
    "UPDATE cafe SET 
    nama = '$nama',
    phone = '$phone',
    deskripsi = '$deskripsi',
    alamat = '$alamat',
    gambar      = '$gambar_baru'
    WHERE id = '$id'");

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }

        $result = mysqli_query($db, 
        "SELECT * FROM akun WHERE id = '$id'");
        $row = mysqli_fetch_array($result);

        if($result){
            echo" 
                <script> 
                alert('Updating data has DONE');
                document.location.href = 'adminRUD.php';
                </script>
            ";
        } 
        else {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="adminUpdate.css">
    <title>ADMIN UPDATE</title>
</head>
<body>
<div id="logo">
    <img src="logo.png" width="180px">
</div>
    
<nav>
    <div>
        <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#">Review Cafe</a></li>
            <li><a href="#">????</a></li>
            <li><a href="#">Log Out</a></li>
        </ul>
            
    </div>
</nav>

<div class="konten">
    <img src="iconupdateBIG.png" width="30%">
    <div class="boxform">
        
        <form method="post" enctype="multipart/form-data">
            <label>Name</label> <br>
            <input type="text" name="nama" id="nama" value = <?= $row['nama']?>>
            <br><br>

            <label>Phone</label> <br>
            <input type="number"  name="phone" id="phone" value = <?= $row['phone']?>>
            <br><br>

            <label>Alamat</label> <br>
            <input type="text" name="alamat" id="alamat" value = <?= $row['alamat']?>>
            <br><br>  

            <label>Deskripsi</label>
            <input type="text"  name="deskripsi" id="deskripsi" value = <?= $row['deskripsi']?>>
            <br><br>

            <label>Upload Foto</label><br>
            <input type="file" name="gambar" value = <?= $row['gambar']?>>
            <br>

            <button class="btn" type="submit" name="submit">UPDATE</button>
        </form> 
    </div>
</div>
</body>
</html>