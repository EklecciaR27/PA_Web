<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM cafe2 WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Delete data has DONE');
        document.location.href = 'adminReview2.php';
        </script>
    ";
    }
    else {
        echo" 
            <script> 
            alert('FAILED Deleting a Data!');
            </script>
        ";
    }
}
?>

