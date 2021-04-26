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
echo("<h1>Producenci-Artykuły relacja wiele do wielu</h1>");
$sql = 'SELECT * FROM sklepProducent';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>producent</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["producent"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
 $sql = 'SELECT * FROM sklepArtykul';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>artykul</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["artykul"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
$sql = 'SELECT * FROM sklepProducent, sklepArtykul, sklepProducent_szkolaKlasa WHERE sklepProducent_id=sklepProducent.id and sklepArtykul_id=sklepArtykul.id';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>producent</th>");
        echo("<th>artykul</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["producent"]."</td><td>".$row["artykul"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 ?>
</body>
   </html>
