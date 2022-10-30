<?php
    session_start();
    // jika $sessionnya sudah ada maka,
    if(!isset($_SESSION['login'])){
        echo "<script>
                alert('Akses ditolak, silakan login dulu')
                document.location.href = 'login.php'
            </script>";

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
    <h1>Selamat Datang ADMIN</h1>
    <a href="logout.php">LogOUT</a>
    
</body>
</html>