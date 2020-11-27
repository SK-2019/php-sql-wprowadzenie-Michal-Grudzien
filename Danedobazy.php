<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
<body>
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
  <div class="nav">
     <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
     <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
    <a class="nav_link" href="Danedobazy.php"><b>DaneDoBazy<b></a>
  </div>
      <h3>Dodawanie Pracownika do tabelki</h3>
  <form action="insert.php" method="POST">
   imie: <input type="text" name="imie"></br>
   dzial: <input type="text" name="dzial"></br>
    zarobki: <input type="text" name="zarobki"></br>
    data_urodzenia (Rok-Miesiac-Dzien): <input type="text" name="data_urodzenia"></br>
    adres: <input type="text" name="adres"></br>
    <input type="submit" value="wyślij do insert.php">
  </form>
  <h3>Usuwanie Pracownika z tabelki</h3>
  <form action="delete.php" method="POST">
    id: <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Zapisz w zmiennej $_POST['id']">
<?php

echo("<hr />");
$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");  
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>id</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>DataUrodzenia</th>");
        echo("<th>NazwaDzialu</th>");
        echo("<th>Usun</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("<td><form action='delete.php' method=POST>");
                     echo("<name='id' value='".$row['id_pracownicy']."'>");
                     echo("<input type=submit value='Usun'>");
                    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");
           
?>
</form>
</body>
</head>
</html>
