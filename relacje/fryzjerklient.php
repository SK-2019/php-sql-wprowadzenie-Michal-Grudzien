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
echo("<h1>Fryzjer-Klient relacja wiele do wielu</h1>");
$sql = 'SELECT * FROM spafryzjer';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>fryzjer</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
 $sql = 'SELECT * FROM spaklient';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>klient</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
         echo("<td>".$row["id"]."</td><td>".$row["klient"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 
$sql = 'SELECT * FROM spafryzjer, spaklient, spafryzjer_spaklient WHERE spafryzjer_id=spafryzjer.id and spaklient_id=spaklient.id';
$result = $conn->query($sql);
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>fryzjer</th>");
        echo("<th>klient</th>");
        while($row=$result->fetch_assoc()){ 
         echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td><td>".$row["klient"]."</td>"); 
         echo("</tr>");
            }
 echo("</table>");
 ?>
</body>
   </html>
