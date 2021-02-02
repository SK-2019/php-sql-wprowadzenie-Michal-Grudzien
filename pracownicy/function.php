<!DOCTYPE html>
<html>
<head>
<title>Michał Grudzień 2Ti gr2</title>
<link rel="stylesheet" href="assets/style.css">
<link rel="icon" type="image/ico" sizes="16x16" href="../assets/favicon.ico">
</head> 
<body>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
  <div class="nav">
     <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
     <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
    <a class="nav_link" href="Danedobazy.php"><b>DaneDoBazy<b></a>
     <a class="nav_link" href="function.php"><b>Funkcja<b></a>                                                    
  </div>
  
<?php
echo("abc");

function funkcja1()
{
 echo("<li>dziala funkcja");
  echo("<li>proba");
  for($i=1;$i<10; $i++)
  {
    echo("<li>petla:" .$i);                                 
  }
}
funkcja1();
funkcja1(33);

?>
</body>
   </html>
