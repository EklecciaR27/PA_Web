
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
<?php
            require 'config.php';
            $result = $conn->query("SELECT * FROM cafe2");
            $i=1;
            while($row = mysqli_fetch_array($result)){
    ?>        
    <div class="container">
            Tanggal  : <?php echo $row["tanggal"]?><br>
            Rating   :    <?php echo $row["rating"]?> <br>
            Message     : <?php echo $row["pesan"] ?><br>
    </div>
    <button><a href="updateMain.php?id=<?=$row['id']?>">Edit</a></button>
    <button><a href="deleteReview.php?id=<?=$row['id']?>">Hapus</a></button>
    <?php
    
            $i++ ; }
    ?>

</div>
</body>
</html>