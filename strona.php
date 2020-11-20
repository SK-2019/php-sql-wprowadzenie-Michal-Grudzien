<?php

echo("jestes na strona.php");
echo("</br>");
echo("<h3>Imie</h3>");
echo($_POST["imie"]);
echo("</br>");
echo("<h3>Dzial</h3>");
echo($_POST["dzial"]);
echo("</br>");
echo("<h3>Zarobki</h3>");
echo($_POST["zarobki"]);
echo("</br>");
echo("<h3>data_urodzenia</h3>");
echo($_POST["data_urodzenia"]);
echo("</br>");
echo("<h3>Adres</h3>");
echo($_POST["adres"]);

$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");
$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
	$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "utworzono";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();




?>
