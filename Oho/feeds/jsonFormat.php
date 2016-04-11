<?php

  header('Content-type: text/plain');

  require('../database/db.php');
  $bd = new DataBase_MySQL ('localhost', 'gus', 'root', 'radiohead');
  $bd->connect();
  $table = $bd->getRanking();

  $var = array();

  $iterator = 0;
  while($iterator<10){
    $rowData = $table[$iterator];
    
    $var[]=$rowData;

    $iterator++;
  }

  echo '{"ranking":'.json_encode($var).'}';

?>



