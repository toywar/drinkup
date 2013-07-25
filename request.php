<?php
  $f = fopen("request.txt", "a+");
  
  fputs($f, $_POST["date"].PHP_EOL);
  fputs($f, $_POST["name"].PHP_EOL);
  fputs($f, $_POST["place"].PHP_EOL);
  fputs($f, $_POST["comment"].PHP_EOL);
  
  fclose($f);
  
  header("Location:index.html");
?>