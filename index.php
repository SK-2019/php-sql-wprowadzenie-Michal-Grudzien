<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
  <h1>Michal Grudzien 2Ti</h1>
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
  <div class="nav">
     <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
     <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
  </div>
      <form action="strona.php" method="POST">
     <input type="text" name="asd"></br>
     <input type="submit" value="wyślij do strona.php">
  </form>
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
