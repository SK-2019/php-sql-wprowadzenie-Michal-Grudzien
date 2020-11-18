<?php

echo("jestes na strona.php");
echo("</br>");

echo($_POST["imie"]);
echo("</br>");
echo($_POST["nazwisko"]);
echo("</br>");
echo($_POST["pesel"]);
echo("</br>");
echo($_POST["urodziny"]);
echo("</br>");
echo($_POST["adres"]);

$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");
$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`) VALUES (NULL,'".$_POST['imie']."')";
	$conn->query($sql);




?>
