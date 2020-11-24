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
