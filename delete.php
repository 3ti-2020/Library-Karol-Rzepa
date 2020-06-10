<?php
$ser="localhost";
$use="root";
$pass="";
$db="library";
    $conn=new mysqli($ser,$use,$pass,$db);

    $tytul=$_POST['tytul'];

    $sql="DELETE FROM krzyz WHERE id_tytul='$tytul'";
    $sql2="DELETE FROM tytuly WHERE id_tytul='$tytul'";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);

    $conn->close();

    header('Location: http://localhost/library/index.php');

?>
