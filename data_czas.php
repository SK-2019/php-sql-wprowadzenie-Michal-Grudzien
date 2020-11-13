<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien"> GitHub </a>
<div class="nav">
 <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
 <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
 <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
 <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
 <a class="nav_link" href="data_czas.php">Data i Czas</a>
    
</div>
</head>
<body>
<?php

 $conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");  
                        
 echo("<hr>");
            $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa działu</th>");
                        echo("<th>wiek</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
 

                        $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org and nazwa_dzial="serwis"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa działu</th>");
                        echo("<th>wiek</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
 
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
                       
                        $sql=("SELECT sum(year(curdate())-year(data_urodzenia)) as Suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org and nazwa_dzial='handel'");
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy where imie like "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
 
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy where imie not like "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        $sql=('SELECT nazwa_dzial,avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia from pracownicy,organizacja where dzial=id_org group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Średnia</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        $sql=('SELECT nazwa_dzial,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where dzial=id_org group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
 
                        $sql=('SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        $sql=('SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where dzial=id_org and nazwa_dzial="handel" or nazwa_dzial="serwis" group by nazwa_dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        $sql=('SELECT imie,min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where dzial=id_org and nazwa_dzial="handel" or nazwa_dzial="serwis" group by nazwa_dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>imie</th>");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        $sql=('SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>imię</th>");
                        echo("<th>dni życia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['imie']."</td><td>".$row['dni_zycia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                $sql=('SELECT * From pracownicy, organizacja where imie not like "%a" and dzial=id_org order by data_urodzenia asc limit 1');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
                        






 ?>
</body>
   </html>
