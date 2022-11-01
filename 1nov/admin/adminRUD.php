<?php
$koneksi = mysqli_connect("localhost", "root", "", "pa_web");
$statistik = query("SELECT * FROM cafe");

function query($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $rows[ ] = $row;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="adminRUD.css">
    <title>ADMIN PAGE</title>
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

<div class="konten"></div>
        <?php foreach($statistik as $data) : ?>
            <div class="box">
                <div class="iconDelUp">
                    <a class="bi bi-arrow-clockwise" href="adminUpdate.php?id=<?php echo $data["id"];?>"></a>
                </div>
                <img src="pict/<?=$data['gambar']?>" alt="" width="450px">

                <div class="text">
                    <div class="namacafe">
                        <?php echo $data['nama']; ?> 
                    </div>
                    <div class="alamat">
                        <div class="iconalamat"><i class="bi bi-house-heart-fill"></i></div>
                        <?php echo $data["alamat"]; ?> 
                    </div>

                    <div class="phone">
                        <div class="iconphone"><i class="bi bi-telephone-forward"></i></i></div>
                        <?php echo $data["phone"]; ?>
                    </div>
                    <div class="desc">
                        <div class="icondesc"><i class="bi bi-blockquote-left"></i></div>
                        <?php echo $data["deskripsi"]; ?> 
                    </div>
                    
                </div>
 
            </div>
            
           
            <br><br>

        <?php endforeach; ?>
</div>
</body>
</html>