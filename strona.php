<?php

echo("jestes na strona.php");
echo("</br>");
echo("<h3>Imie</h3>");
echo($_POST["imie"]);
echo("</br>");
echo("<h3>Nazwisko</h3>");
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
$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (null,"pawel",4,33,1991-01-11)";
	$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "utworzono";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();




?>
