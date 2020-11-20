<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
</head>
<body>
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
  <div class="nav">
     <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
     <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
    <a class="nav_link" href="formularz.html"><b>Formularz<b></a>
  </div>
  <?php
echo("jestes w delete.php <br>");
echo $_POST['id'];
$conn = new mysqli( "mysql-michalgrudzien04.alwaysdata.net" , "218517" , "ZAKo140" , "michalgrudzien04_baza");  

      $sql = "DELETE FROM pracownicy WHERE id= $_POST['id'];";




?>
