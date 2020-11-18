<?php

echo("jestes na strona.php");
echo("</br>");
echo("<h3>Imie</h3>");
echo($_POST["imie"]);
echo("</br>");
echo("<h3>Nazwisko/h3>");
echo($_POST["nazwisko"]);
echo("</br>");
echo("<h3>Pesel</h3>");
echo($_POST["pesel"]);
echo("</br>");
echo("<h3>Urodziny</h3>");
echo($_POST["urodziny"]);
echo("</br>");
echo("<h3>Adres</h3>");
echo($_POST["adres"]);

$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");
$sql = "INSERT INTO spaLcr81av(`id_pracownicy`, `imie`) VALUES (NULL,'".$_POST['imie']."')";
	$conn->query($sql);




?>
