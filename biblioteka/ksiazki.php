<!DOCTYPE html>
<html>
<head>
<title>Michał Grudzień 2Ti gr2</title>
<link rel="stylesheet" href="../assets/style.css">
<link rel="icon" type="image/ico" sizes="16x16" href="../assets/favicon.ico">
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
require_once('assets/connect.php');  
  $sql = 'SELECT * FROM biblTytul';
$result = $conn->query($sql);
    echo("<h1>Tytuły</h1>");
    echo("<select name='title' id='title'>");
  
        while($row=$result->fetch_assoc()){
           
            echo("<option value=".$row['id'].">".$row['tytul']."</option>");
        }
    echo("</select>");
       
       $sql = 'SELECT * FROM biblAutor';
echo("<h1>Autorzy</h1>");
$result=$conn->query($sql);
    echo("<select name='title' id='title'>");
  while($row=$result->fetch_assoc()){
    echo("<option value=".$row['id'].">".$row['autor']."</option>");
        }
    echo("</select>");
       
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
echo("<h1>Połaczone tabelki</h1>");
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>autor</th>");
        echo("<th>tytul</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");








?>
</body>
   </html>
