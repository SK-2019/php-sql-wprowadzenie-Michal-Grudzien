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
   <a class="nav_link" href="data_czas.php">Data i Czas</a>
        <a class="nav_link" href="Danedobazy.html"><b>Formularz<b></a>
</div>
</head>
<body>
    <?php
            $conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");  
             echo("<hr />");
            $sql=('SELECT sum(zarobki) as suma from pracownicy');
            $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
        $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by dzial');
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            
    
            $sql=('SELECT nazwa_dzial,dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org');
            $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>srednia</th>");
                echo("<th>nazwa działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");

$sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=4 and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where imie not like "%a" and dzial=1 or dzial=2 and dzial=id_org group by nazwa_dzial');
    $result=$conn->query($sql); 
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            
            $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql); 
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where imie like "%a" and dzial=id_org and dzial=1 or dzial=3 group by dzial');
    $result=$conn->query($sql); 
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            echo("<h2>Group by</h2>");
            echo("<hr />");
            
            $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql); 
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,count(zarobki) as ilosc from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql); 
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
     echo("<h2>Having</h2>");
            echo("<hr />");
$sql=('SELECT nazwa_dzial,sum(zarobki)as suma from pracownicy, organizacja where dzial=id_org GROUP BY nazwa_dzial HAVING sum(zarobki) < 28 ');
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr>");

        $sql=('SELECT nazwa_dzial,avg(zarobki)as suma from pracownicy, organizacja WHERE imie not like "%a" GROUP BY nazwa_dzial HAVING avg(zarobki) > 30');
    $result=$conn->query($sql); 
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>średnia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");

            $sql=('SELECT nazwa_dzial,count(id_pracownicy)as suma from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3');
    $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>ilość</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
 
?>
