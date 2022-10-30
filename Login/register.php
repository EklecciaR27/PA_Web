<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>REGISTRASI</title>
</head>
<body>
<div class="contact-box">
<div class="iconregist"><img src="img/regist_icon.png"></div>
            <div class="contact-left">
                <h1>Registrations</h1> 
                <form action="" method="post">
                    <div class="input-grup">
                            <label for="">Email</label>
                            <input type="text" name="email">
                    </div>
                    <br>

                    <div class="input-grup">
                            <label for="">Username</label> 
                            <input type="text" name="username">
                    </div>
                    <br>

                    <div class="input-grup">
                            <label for="">Password</label>
                            <input type="password" name="password">
                    </div>
                    <br>

                    <div class="input-grup">
                            <label for="">Confirm Password</label>
                            <input type="password" name="konfirmasi">
                    </div>
                    <br>

                    <button type="submit" name="regis" value="registrasi">REGIST</button>

                <p> Sudah Punya Akun?
                    <a href="login.php">Login Here</a>
                </p>
            </div>



        


    </form>

    <div class="contact-right"></div>
</div>


    
</body>
</html>

<?php
    require 'config.php';
    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username telah digunakan atau belom
        $user = $db->query("SELECT * FROM akun WHERE username='$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
            alert('username telah digunakan silakan gunakan username lain');
            </script>";
        } else{
            // konfirmasi password uda bener atau belom
            if ($password == $konfirmasi){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO akun(email,username,psw)
                VALUES ('$email', '$username', '$password')";
                $result = $db->query($query);

                if($result){
                    echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href='login.php'; 
                    </script>";
                }
                else {
                    echo "<script>
                    alert('Registrasi Gagawl');
                    </script>";
                }
            } else {
                echo "<script>
                alert('konfirmasi pw salah!');
                </script>";
            }
        }
    }

?>