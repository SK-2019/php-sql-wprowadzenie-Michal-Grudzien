<?php
require_once("connect.php");
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query('SELECT*FROM pracownicy where imie not like "%a" and zarobki<35 and
zarobki>20');
echo('<table border = 1>');
echo('<th>id</th>');
echo('<th>imie</th>');
echo('<th>dzial</th>');
echo('<th>zarobki</th>');
while ($row = $result->fetch_assoc()){
echo('<tr>');
echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td>
<td>'.$row['zarobki'].'</td>');
echo('</tr>');
}
echo('</table>');

?>
