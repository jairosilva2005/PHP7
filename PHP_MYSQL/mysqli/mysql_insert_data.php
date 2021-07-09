<?php

  /* Configs */
  $HOST = "localhost";
  $USER = "root";
  $PASS = "jairo.silva.2032";
  $DATA = "test_php";

  $query = "insert into n_php (numb, namb) values ('10', 'Dez')";

  /* Inserindo dados com PHP Orientado a Objetos */
  $database_connection = new mysqli($HOST, $USER, $PASS, $DATA);

  if($database_connection->connect_error) {
    echo "Connection error:" . $database_connection->connect_error;
  }

  /*
  if($database_connection->query($query) == true) {
    echo "Query OK!";
  } else {
    echo "Query error:" . $database_connection->error;
  }
  */

  $database_connection->close();

  /* Inserindo dados com PHP Procedural */

  $database_connect = mysqli_connect($HOST, $USER, $PASS, $DATA);

  if(!$database_connect) {
    echo "Connection error:" . mysqli_connect_error();
  }

  if(mysqli_query($database_connect, $query)) {
    echo "Query OK!";
  } else {
    echo "Query error: " . mysqli_error($database_connect);
  }

  mysqli_close($database_connect);

?>
