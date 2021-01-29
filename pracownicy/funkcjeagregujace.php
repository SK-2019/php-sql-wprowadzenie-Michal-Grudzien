<!DOCTYPE html>
<html>
<head>
<title>Michał Grudzień 2Ti gr2</title>
<link rel="stylesheet" href="assets/style.css">
</head> 
 <body>
    <div class="container">
      <div class="item colorWhite">

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlack">
     <h3> Linki: </h3>
       <ul>
        <li class="item_link"><a class="" href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">GitHub</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/Danedobazy.php">DaneDoBazy</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/ksiazki.php">Biblioteka</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/index.php">StronaGlowna</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/funkcjeagregujace.php">FunkcjeAgregujace</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy_organizacja.php">Pracownicy_Organizacja</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy.php">Pracownicy</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/data_czas.php">DataCzas</a></li>
        </ul>
       
     </div>
      <div class="item colorPurple">
         </div>
    </div>
  </body>
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
