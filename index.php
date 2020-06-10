<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="ins">
                <form action="insert.php" method="POST">
                <input type="text" name="imie">Imie<br>
                <input type="text" name="nazwisko">Nazwisko<br>
                <input type="text" name="tytul">Tytuł<br>
                <input type="submit" name="POST" value="INSERT">
                </form>
            </div>
        </div>
        <div class="right">
            <?php
            $ser="localhost";
                $use="root";
                $pass="";
                $db="library";
            $conn=new mysqli($ser,$use,$pass,$db);
            echo("<form action='insertkrzyz.php' method='POST'>");

            $result1 = $conn -> query("SELECT id_autor FROM autorzy ORDER BY id_autor DESC LIMIT 1");
    
            while($row = $result1 -> fetch_assoc() ){
                echo("<input type='hidden' value='".$row['id_autor']."' name='id_autor'/>");
            }
     
            $result2 = $conn -> query("SELECT id_tytul FROM tytuly ORDER BY id_tytul DESC LIMIT 1");
    
             while($row = $result2 -> fetch_assoc()){
                echo("<input input type='hidden' value='".$row['id_tytul']."' name='id_tytul'/>");
            }
    
            echo("<input type='submit' name='POST' value='Odśwież'>");
    
    
        echo("</form>");
        
        $result= $conn->query("SELECT * FROM krzyz, autorzy, tytuly WHERE krzyz.id_tytul = tytuly.id_tytul AND krzyz.id_autor = autorzy.id_autor;");
        echo("<table class='tabelka'>");
        echo("<tr>
            <td>Imie</td>
            <td>Nazwisko</td>
            <td>Tytuł</td> 
            <td>Usuń Autora</td> 
            <td>Usuń Książkę</td>
        </tr>");
    
        while($wiersz = $result->fetch_assoc()){
    
    
    
            echo("<tr>");
            echo("<td>" .$wiersz['imie']. "</td><td>" .$wiersz['nazwisko']. "</td><td>" .$wiersz['tytul']. "</td><td>
            <form action='delete2.php' method='POST'>
            <input type='hidden' name='autor' value='".$wiersz['id_autor']."'>
            <input type='submit' name='POST' value='DELETE'>
            </form>
        </td><td>
    
    
                <form action='delete.php' method='POST'>
                <input type='hidden' name='tytul' value='".$wiersz['id_tytul']."'>
                <input type='submit' name='POST' value='DELETE'>
                </form>
            </td>");
            echo("</tr>");
    
        }
        echo("</table>");
        ?>
        </div>
    </div>
</body>
</html>