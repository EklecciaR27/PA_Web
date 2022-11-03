<!-- Read Cafe -->
<?php
$koneksi = mysqli_connect("localhost", "root", "", "pa_web");
$statistik = query("SELECT * FROM cafe WHERE id = '4'");

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

<!-- Input Komentar -->
<?php
require 'config.php';

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $tanggal = $_POST["tanggal"];
    $rating = $_POST["rating"];
    $pesan = $_POST["pesan"];
    $result = mysqli_query($db, "INSERT INTO cafe3 (tanggal,rating,pesan,nama) VALUES ('$tanggal','$rating','$pesan', '$nama')");
    if($result){
        echo
        "
            <script>
                alert('Data Berhasil Ditambahkan!'); 
                document.location.href = 'userReview3.php' ;
            </script>
        ";

    }
    else{
        echo
        "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'UserReview3.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="userReview.css">
    <title>REVIEW PAGE</title>
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
        <?php foreach($statistik as $data) : ?>
            <div class="box">
                <img src="img/<?=$data['gambar']?>" alt="" width="450px">
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

<div class="headerRead">
    <p>
        What People Say <br>
        About <?php echo $data['nama']; ?>.
    </p>
</div>

<?php
    require 'config.php';
    $result = $db->query("SELECT * FROM cafe3");
?>
    <?php foreach($result as $row) : ?>
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


<br><br>


<div class="inputuser">
<h2>How About You?</h2>
        <form action="" method="post">
            <div class="input-row">
                <div class="input-group">
                    <label  for=""><br>Nama    : <br></label>
                    <input  type="text" name="nama" required>
                </div>
                <div class="input-group">
                    <label  for=""><br>Tanggal    : <br></label>
                    <input  type="date" name="tanggal" required><br>
                </div>
            </div>

            <div class="input-row">
                    <div class="input-group">
                        <label for=""><br>Rating      :<br> </label>
                        <input type="number" name="rating" min='1' max='10' required><br>
                    </div>
                    <div class="input-group">
                        <label for="">Message          :<br> </label>
                        <textarea type="text" name="pesan" rows="5" placeholder="Type your Review Here"> </textarea>
                    </div>
            </div>
                
            <button type="submit" class="submit" name="submit" value="submit">SEND</button>
        </form>
</div>





</div>

</body>
</html>