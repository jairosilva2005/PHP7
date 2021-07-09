<?php

  const HOST  = "localhost";
  const USER  = "root";
  const PASS  = "jairo.silva.2032";
  const DATA  = "php_operations";
  const QUERY = "SELECT ID, NAME from io_info WHERE ID <= 3";

  /* Selecionando dados com WHERE - PHP Orientado a Objetos */
  $database_connection = new mysqli(HOST, USER, PASS, DATA);

  if($database_connection->connect_error) {
    echo "Connection failed: " . $database_connection->connect_error;
    exit(1);
  }

  $result = $database_connection->query(QUERY);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "ID[{$row['ID']}], NAME[{$row['NAME']}]" . PHP_EOL;
    }
  } else {
    echo "0 results!";
  }

  $database_connection->close();

  /* Com PHP Procedural */
  $database_connect = mysqli_connect(HOST, USER, PASS, DATA);

  if(!$database_connect) {
    echo "Connection failed: " . mysqli_connect_error();
  }

  $res = mysqli_query($database_connect, QUERY);

  if(mysqli_num_rows($res) > 0) {
    while($r = mysqli_fetch_assoc($res)) {
      echo "ID[{$r['ID']}], NAME[{$r['NAME']}]" . PHP_EOL;
    }
  } else {
    echo "0 results!";
  }

  mysqli_close($database_connect);

?>
