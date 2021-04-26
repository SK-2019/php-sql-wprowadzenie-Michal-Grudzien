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
echo("<h1>Osoba-Rola relacja wiele do wielu</h1>");
$sql = 'SELECT * FROM sinfoRola';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>rola</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["rola"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
 $sql = 'SELECT * FROM sinfoOsoba';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>nazwaosoby</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["nazwaosoby"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
$sql = 'SELECT * FROM sinfoOsoba, sinfoRola, sinfoOsoba_sinfoRola WHERE sinfoOsoba_id=sinfoOsoba.id and sinfoRola_id=sinfoRola.id';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>nazwaosoby</th>");
        echo("<th>rola</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["nazwaosoby"]."</td><td>".$row["rola"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 ?>
</body>
   </html>
