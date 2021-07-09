<?php

  const HOST  = "localhost";
  const DATA  = "php_operations";
  const USER  = "root";
  const PASS  = "jairo.silva.2032";
  const QUERY = "SELECT * FROM io_info";

  /* Buscando dados no banco de dados com PHP Orientado a Objetos */
  $database_connection = new mysqli(HOST, USER, PASS, DATA);

  if($database_connection->connect_error) {
    echo "Connection failed: " . $database_connection->connect_error;
  }

  $result = $database_connection->query(QUERY);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "ID[{$row['ID']}], NOME[{$row['NAME']}], IDADE[{$row['AGE']}]" . PHP_EOL;
    }
  } else {
    echo "0 results!";
  }

  $result->close();
  $database_connection->close();

  /* Buscando dados no banco de dados com PHP Procedural */

  $database_connect = mysqli_connect(HOST, USER, PASS, DATA);

  if(!$database_connect) {
    echo "Connection failed: " . mysqli_connect_error();
  }

  $res = mysqli_query($database_connect, QUERY);

  if(mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
      echo "ID[{$row['ID']}], NAME[{$row['NAME']}], IDADE[{$row['AGE']}]" . PHP_EOL;
    }
  } else {
    echo "0 results!";
  }

  mysqli_close($database_connect);

?>
