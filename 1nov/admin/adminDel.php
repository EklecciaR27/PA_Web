<?php
$koneksi = mysqli_connect("localhost", "root", "", "pa_web");
$statistik = query("SELECT * FROM akun");

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
    <link rel="stylesheet" href="adminDel.css">  

    <title>DELETE ACCOUNT</title>
</head>
<body>
    <div id="logo">
        <img src="logo.png" width="180px">
    </div>

    <table cellpadding=10 cellspacing=0>
        <tr>
            <th>LIST</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>LEVEL</th>
            <th>ACTION</th>
        </tr>
        <?php $y = 1?>
        <?php foreach($statistik as $data) : ?>
        <tr>
            <td><?php echo $y; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["level"]; ?></td>
            <td><a class="bi bi-person-dash-fill" href="deleteAkun.php?id=<?php echo $data["id"];?> "></a></td>
        </tr>
        <?php $y++; ?>
        <?php endforeach; ?>
    
</body>
</html>