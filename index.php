<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head> 
 <body>
    <div class="container">
      <div class="item colorWhite">
        <h3> Michał Grudzień 2TI gr2 </h3>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlack">
     Linki:
       <ul>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com">GitHub</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/Danedobazy.php">DaneDoBazy</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/ksiazki.php">Biblioteka</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/index.php">StronaGlowna</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/funkcjeagregujace.php">FunkcjeAgregujace</a></li>
        <li class="item_link"><a class="" href="https://michal-grudzien-indexphp.herokuapp.com/pracownicy_organizacja.php">Pracownicy_Organizacja</a></li>
        
       </ul>
       
     </div>
      <div class="item colorPurple">
         </div>
    </div>
  </body>
<?php
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
</body>
   </html>
