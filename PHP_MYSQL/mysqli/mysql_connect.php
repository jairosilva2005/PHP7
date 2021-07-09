<?php

  /* Conexão feita com MySQLi Orientado a Objetos */

  $DATABASE_USER = "root";
  $DATABASE_PASS = "jairo.silva.2032";
  $DATABASE_HOST = "localhost";

  $database_connection = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS);

  if($database_connection->connect_error) {
    die("Connection error: " . $database_connection->connect_error);
  } else {
    echo "Connected successfully!" . PHP_EOL;
  }

  /* Conexão feita com MySQLi procedural */

  $db_connection = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS);

  if(!$db_connection) {
    die("Connection error: " . mysqli_connect_error());
  } else {
    echo "Connected successfully!" . PHP_EOL;
  }

  /* 1: OOP, 2: Procedural */
  $database_connection->close();
  mysqli_close($db_connection);

?>
