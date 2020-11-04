<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Michal Grudzien 2Ti</h1>
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
<?php
require_once("connect.php");
$conn = new mysqli("sql7.freemysqlhosting.net","sql7373528","SnSvdZtxTb","sql7373528");
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

?>
</body>
   </html>
