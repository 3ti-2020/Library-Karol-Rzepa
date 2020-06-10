<?php
$ser="localhost";
$use="root";
$pass="";
$db="library";
    $conn=new mysqli($ser,$use,$pass,$db);

    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $tytul=$_POST['tytul'];
    $ISBN="132131231231312";

    $sql="INSERT INTO autorzy (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
    $sql2="INSERT INTO tytuly (tytul, ISBN) VALUES ('$tytul', '$ISBN')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);

    $conn->close();

    header('Location: http://localhost/library/index.php');
?>