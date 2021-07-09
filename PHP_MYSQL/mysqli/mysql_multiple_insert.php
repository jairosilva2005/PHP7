<?php

  const HOST = "localhost";
  const DATA = "test_php";
  const USER = "root";
  const PASS = "jairo.silva.2032";

  $query  = "INSERT INTO php_values (numb, numa) VALUES('10', 'Dez');";
  $query .= "INSERT INTO php_values (numb, numa) VALUES('20', 'Vinte');";
  $query .= "INSERT INTO php_values (numb, numa) VALUES('30', 'Trinta');";
  $query .= "INSERT INTO php_values (numb, numa) VALUES('40', 'Quarenta');";

  /* Múltiplas requisições com PHP Orientado a Objetos */
  $database_connection = new mysqli(HOST, USER, PASS, DATA);

  if($database_connection->connect_error) {
    echo "Connection failed: " . $database_connection->connect_error;
  }

  /*
  if($database_connection->multi_query($query) == true) {
    echo "Query OK!";
  } else {
    echo "Query error: " . $database_connection->error;
  }
  */
  $database_connection->close();

  /* Múltiplas requisições com PHP Procedural */

  $database_connect = mysqli_connect(HOST, USER, PASS, DATA);

  if(!$database_connect) {
    echo "Connection failed: " . mysqli_connect_error();
  }

  if(mysqli_multi_query($database_connect, $query)) {
    echo "Query OK!";
  } else {
    echo "Query error: " . mysqli_error($database_connect);
  }

  mysqli_close($database_connect);

?>
