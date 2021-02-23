<!DOCTYPE html>
<html>
<head>
<title>Michał Grudzień 2Ti gr2</title>
<link rel="stylesheet" href="assets/style.css">
<link rel="icon" type="image/ico" sizes="16x16" href="../assets/favicon.ico">
</head> 
 <body>
    <div class="container">
      <div class="item colorWhite">
        <h3> Michał Grudzień 2TI gr2 </h3>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlack">
     <h3> Linki: </h3>
       <ul>
        <li class="item_link"><a class="" href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">GitHub</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy/Danedobazy.php">DaneDoBazy</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/biblioteka/ksiazki.php">Biblioteka</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/index.php">StronaGlowna</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy/funkcjeagregujace.php">FunkcjeAgregujace</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy/pracownicy_organizacja.php">Pracownicy_Organizacja</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy/pracownicy.php">Pracownicy</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy/data_czas.php">DataCzas</a></li>
        </ul>
       
    </div>
    <div class="item colorPurple">
<?php
echo("<li> hostname : ".$_SERVER['HTTP_HOST']);
$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");  
$result = $conn->query('SELECT*FROM pracownicy where imie not like "%a" and zarobki<30');
echo('<table border = 1>');
echo('<th>id</th>');
echo('<th>imie</th>');
echo('<th>dzial</th>');
echo('<th>zarobki</th>');
while ($row = $result->fetch_assoc()){
echo('<tr>');
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td>');
echo('</tr>');
}
echo('</table>');
  
$result = $conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org');
echo('<table border = 1>');
echo('<th>id</th>');
echo('<th>imie</th>');
echo('<th>dzial</th>');
echo('<th>zarobki</th>');
while ($row = $result->fetch_assoc()){
echo('<tr>');
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td><td>'.$row['zarobki'].'</td>');
echo('</tr>');
}
echo('</table>');

?>
</div>
</body>
   </html>
