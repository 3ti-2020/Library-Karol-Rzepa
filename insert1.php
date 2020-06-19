<?php
    $conn = new mysqli("localhost", "root", "", "library",);
    $sql = "INSERT INTO `autorzy`(`id_autor`, `autor`) VALUES (NULL , '".$_POST['autor']."') ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>