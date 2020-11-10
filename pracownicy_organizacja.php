<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
   <a class="nav_link" href="pracownicy.php"><b>Pracownicy wstep<b></a>
   <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
   
        require_once('connect.php');
   $result= $conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org');
   echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>")
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
   while($row=$result->fetch_assoc()){
         echo("<tr>");
         echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
            }
        echo("</table>");
    echo("<hr />");
    
    $result= $conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org and (dzial=1 or dzial=4)');
   echo("<hr />");
        echo("<h3>Tabela Pracowników z działu 1 albo 4</h3>")
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
   while($row=$result->fetch_assoc()){
         echo("<tr>");
         echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
            }
        echo("</table>");
    echo("<hr />");
   
   
    $result= $conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org and imie like "%a"');
   echo("<hr />");
        echo("<h3>Tabela Pracowników płci żeńskiej</h3>")
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
   while($row=$result->fetch_assoc()){
         echo("<tr>");
         echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td>");
            }
        echo("</table>");
    echo("<hr />");
    
    
    $result= $conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org and imie not like "%a"');
   echo("<hr />");
        echo("<h3>Tabela Pracowników płci menskiej</h3>")
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
   while($row=$result->fetch_assoc()){
         echo("<tr>");
         echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".['nazwa_dzial']."</td>");
            }
        echo("</table>");
    echo("<hr />")
    
    
    
   
   
   ?>
</body>
   </html>
