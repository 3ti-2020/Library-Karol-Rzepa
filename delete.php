<?php
 $conn = new mysqli("localhost", "root", "", "library",);
 $sql = "DELETE FROM `krzyz` WHERE id_krzyz=".$_POST['id']." "; 
    mysqli_query($conn, $sql);
    header("Location:index.php");
?>