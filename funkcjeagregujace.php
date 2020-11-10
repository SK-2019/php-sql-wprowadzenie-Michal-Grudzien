<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">GitHub</a>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
</div>
</head>
<body>
    <?php
    
    echo("<hr />");
             require_once('connect.php');
             $result=$conn->query('SELECT sum(zarobki) as suma from pracownicy');
                echo("<h3>Suma zarobków wszystkich pracowników</h3>");//nazwa nad tabelą
                echo("<table border=1>");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
    echo("<h3> Wszystkie zarobki wszystkich Kobiet</h3>");
            echo("<table border=1>");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by dzial');
    echo("<h3> Suma zarobków Mężczyzn z działu 2 lub działu 3 </h3>");
            echo("<table border=1>");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org');
    echo("<h3> Średnie zarobki Mężczyzn </h3>");
            echo("<table border=1>");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    
    
    
 
?>
