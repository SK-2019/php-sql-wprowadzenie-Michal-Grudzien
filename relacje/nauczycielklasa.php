<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/style.css">
<link rel="icon" type="image/ico" sizes="16x16" href="../assets/favicon.ico">
</head> 
<body>
<?php       
include('../assets/header.php');
include('../assets/nav.php');
echo("<li> hostname : ".$_SERVER['HTTP_HOST']);
require_once("../assets/connect.php");  
echo("<h1>Nauczyciel-Klasa relacja wiele do wielu</h1>");
$sql = 'SELECT * FROM szkolaNauczyciel';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>nauczyciel</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["nauczyciel"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
 $sql = 'SELECT * FROM szkolaKlasa';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>klasa</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["klasa"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
$sql = 'SELECT * FROM szkolaNauczyciel, szkolaKlasa, szkolaNauczyciel_szkolaKlasa WHERE szkolaNauczyciel_id=szkolaNauczyciel.id and szkolaKlasa_id=szkolaKlasa.id';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>nauczyciel</th>");
        echo("<th>klasa</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["nauczyciel"]."</td><td>".$row["klasa"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 ?>
</body>
   </html>
