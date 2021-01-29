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
