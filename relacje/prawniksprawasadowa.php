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
echo("<h1>Prawnik-Sprawa Sądowa relacja wiele do wielu</h1>");
$sql = 'SELECT * FROM sprsadPrawnik';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>prawnik</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["prawnik"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
 $sql = 'SELECT * FROM sprsadSprawaSadowa';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>sprawa</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["sprawa"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
$sql = 'SELECT * FROM sprsadPrawnik, sprsadSprawaSadowa, sprsadPrawnik_sprsadSprawaSadowa WHERE sprsadPrawnik_id=sprsadPrawnik.id and sprsadSprawaSadowa_id=sprsadSprawaSadowa.id';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>prawnik</th>");
        echo("<th>sprawa</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["prawnik"]."</td><td>".$row["sprawa"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 ?>
</body>
   </html>
