<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">
        <h1>BIBLIOTEKA KAROL RZEPA</h1>
        </div>
        <div class="main">
            <div class="a">
            <?php
           $conn = new mysqli("localhost", "root", "", "library", "3308");
           $result1 = $conn->query("SELECT id_krzyz, autor, tytul FROM krzyz, autorzy, tytuly WHERE krzyz.id_autor=autorzy.id_autor AND krzyz.id_tytul=tytuly.id_tytul");
           echo("<table class='tabelka' border=1");
           echo("<tr>
           <th>ID Książki</th>
           <th>Autor</th>
           <th>Tytuł</th>
           <th>Usuwanie</th>
           </tr>");

           while($row=$result1->fetch_assoc() ){
               echo("<tr>");
               echo("<td>".$row['id_krzyz']."</td>");
               echo("<td>".$row['autor']."</td>");
               echo("<td>".$row['tytul']."</td>");
               echo("<td>
               <form action='delete.php' method='post'>
                   <input type='hidden' name='id' value='".$row['id_krzyz']."'>
                   <input type='submit' value='x'>
               </form>
                      </td>");
               echo("</tr>");
           }
          ?>
            </div>
            <div class="b">

            </div>
            <div class="c">
            
            </div>
        </div>
    </div>
</body>
</html>