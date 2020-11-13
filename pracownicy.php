<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
        <a class="nav_link" href="data_czas.php">Data i Czas</a>
</div>
</head>
<body>
<?php
  $conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");  
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
      echo("<hr />");
        echo("<h3>Tabela pracowników z działu 2</h3>"); 
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
    
    
    $result = $conn->query('SELECT  * FROM pracownicy WHERE (dzial=2 or dzial=3)');
      echo("<hr />");
        echo("<h3>Tabela pracowników z działu 2 i 3</h3>"); 
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
    
    $result = $conn->query('SELECT imie, dzial, zarobki, FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki<30 and (dzial=1 or dzial=2)');
     echo("<hr />");
                echo("<h3>Tabela pracowników z zarobkiami mniejszymi niz 30</h3>");
                echo("<table>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                echo("<th>data_urodzenia</th>");
                     while($row=$result->fetch_assoc()){ 
                       echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
        
                        echo("</tr>");
                    }
                       echo("</table>");
    
    
    
    
         
    
        ?>
