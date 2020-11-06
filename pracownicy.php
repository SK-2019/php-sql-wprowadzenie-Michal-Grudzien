<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
</div>
</head>
<body>
<?php
  require_once('conn.php');;
   $result= $conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org');
        echo("<h3>Tabela Pracowników</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
                echo("</tr>");
            }
        echo("</table>");
       
  
    $result = $conn->query('SELECT  * FROM pracownicy WHERE dzial=2');
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
        echo("</table>");
    
    
         
    
        ?>
