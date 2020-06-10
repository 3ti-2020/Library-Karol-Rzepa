<?php
$ser="localhost";
$use="root";
$pass="";
$db="library";
    $conn=new mysqli($ser,$use,$pass,$db);

    $autor=$_POST['autor'];

    $sql ="DELETE FROM krzyz WHERE id_autor='$autor'";
    $sql2="DELETE FROM autorzy WHERE id_autor='$autor'";

    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);

    $conn->close();

    header('Location: http://localhost/library/index.php');

?>