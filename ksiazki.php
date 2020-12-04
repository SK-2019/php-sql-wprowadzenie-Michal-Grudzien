<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
  <h1>Michal Grudzien 2Ti</h1>
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
  <div class="nav">
     <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
     <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
    <a class="nav_link" href="Danedobazy.php"><b>DaneDoBazy<b></a>
     <a class="nav_link" href="function.php"><b>Funkcja<b></a>
     <a class="nav_link" href="ksiazki.php"><b>Ksiazki i Autorzy<b></a>    
  </div>
<?php
$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");
  $sql = 'SELECT * FROM biblTytul';
$result = $conn->query($sql);
         echo("<hr />");
    echo("<h1>Tytuły</h1>");
    echo("<select name='title' id='title'>");
  
        while($row=$result->fetch_assoc()){
           
            echo("<option value=".$row['id'].">".$row['tytul']."</option>");
        }
    echo("</select>");
echo("<hr />");
       
       $sql = 'SELECT * FROM biblAutor';
echo("<h1>Autorzy</h1>");
$result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>autor</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
       
       $sql = 'SELECT * FROM biblAutor_biblTytul';
echo("<h1>Połaczone</h1>");
$result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>biblAutor_id</th>");
        echo("<th>biblTytul_id</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["biblAutor_id"]."</td><td>".$row["biblTytul_id"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");








?>
</body>
   </html>
