<?php
$ser="localhost";
$use="root";
$pass="";
$db="library";
$conn=new mysqli($ser,$use,$pass,$db);

    $autor=$_POST['id_autor'];
    $tytul=$_POST['id_tytul'];

    $sql="INSERT INTO krzyz (id_autor, id_tytul) VALUES ('$autor', '$tytul')";

    mysqli_query($conn, $sql);

    $conn->close();

    header('Location: http://localhost/library/index.php');
?>