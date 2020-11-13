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
    
    $result=$conn->query('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where dzial=id_org');
    echo("<h3> Ilosc wszystkich pracownikow </h3>");
            echo("<table border=1>");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where imie like "%a" and dzial=id_org and dzial=1 or dzial=3 group by dzial');
    echo("<h3> Ilosc Kobiet w dzialach 1 i 3 </h3>");
            echo("<table border=1>");
            echo("<th>ilosc</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,count(zarobki) as ilosc from pracownicy,organizacja where dzial=id_org group by dzial');
    echo("<h3> Ilość pracownikow w poszczegolnych dzialach </h3>");
            echo("<table border=1>");
            echo("<th>ilosc</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,sum(zarobki)as suma from pracownicy, organizacja where dzial=id_org GROUP BY nazwa_dzial HAVING sum(zarobki) < 28');
    echo("<h3> Suma zarobkow mniejsza od 28 </h3>");
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
    
    $result=$conn->query('SELECT nazwa_dzial,avg(zarobki)as suma from pracownicy, organizacja WHERE imie not like "%a" GROUP BY nazwa_dzial HAVING avg(zarobki) > 30');
    echo("<h3> srednie zarobki mezczyzn wieksze od 30 </h3>");
            echo("<table border=1>");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    $result=$conn->query('SELECT nazwa_dzial,count(id_pracownicy)as suma from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3');
    echo("<h3> Ilosc pracownikow wieksza w danym dziale od 3 </h3>");
            echo("<table border=1>");
            echo("<th>ilosc</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    
    
    
    
    
    
    
    
    
    
    
    
    
 
?>
