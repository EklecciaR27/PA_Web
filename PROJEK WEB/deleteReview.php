<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($conn,
        "DELETE FROM cafe1 WHERE id ='$id'");

    if($result){
        echo " 
            <script> 
            alert('You Deleted foto');
            document.location.href = 'readReview.php';
            </script>
        ";
    }
}

?>