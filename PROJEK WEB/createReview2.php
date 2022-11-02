<?php
require 'config.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $rating = $_POST["rating"];
    $pesan = $_POST["pesan"];
    $result = mysqli_query($conn, "INSERT INTO cafe2 (tanggal, rating,pesan) VALUES ('$tanggal','$rating','$pesan')");
    if($result){
        echo
        "
            <script>
                alert('Data Berhasil Ditambahkan!'); 
                document.location.href = 'readReview.php' ;
            </script>
        ";

    }
    else{
        echo
        "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'createReview.php';
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
    <link rel="stylesheet" href="formReview.css" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <div align="center">
            <div class="box" align="center">
                <h1>give your REVIEW about that cafe</h1>
                    <form action="" method="post">
                        <div class="form-group">
                            <label  for=""><br>Tanggal    : <br></label>
                            <input  type="date" name="tanggal" required><br>
                        </div>
                        <div class="form-group">
                            <label for=""><br>Rating      :<br> </label>
                            <input type="number" name="nama" required><br>
                        </div>
                        <div>
                            <label for="">Message          :<br><br> </label>
                            <textarea type="text" name="pesan" rows="7" placeholder="Type your Review Here"> </textarea>
                        </div>
                        <!-- <input type="text" name="pesan"  required> <br> -->
                        <br><br>
                        <button type="submit" class="submit" name="submit" value="submit" >Submit</button>
                    </form>
            </div>
    </div>
</div>
</body>
</html>