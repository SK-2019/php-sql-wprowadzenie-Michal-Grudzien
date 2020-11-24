<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head> 
<body>
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-Michal-Grudzien">Github</a>
  <div class="nav">
     <a class="nav_link" href="pracownicy.php">Pracownicy wstęp</a>
     <a class="nav_link" href="funkcjeagregujace.php">Funkcje agregujace</a>
    <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy i Organizacja<b></a>
   <a class="nav_link" href="https://michal-grudzien-indexphp.herokuapp.com">Strona Glowna</a>
    <a class="nav_link" href="data_czas.php">Data i Czas</a>
    <a class="nav_link" href="Danedobazy.html"><b>DaneDoBazy<b></a>
     <a class="nav_link" href="function.php"><b>Funkcja<b></a>                                                    
  </div>
  
<?php
echo("abc");

function funkcja1($liczba){
  echo("<li>dziala funkcja");
  echo("<li>proba ".$liczba);
  for($i=1;$i<$liczba;$i++){
    echo("<li>petla: ".$i);
  }
}
funkcja(33);


?>
</body>
   </html>
