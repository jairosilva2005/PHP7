<?php
  
  /* Configs */

  $HOST = "localhost";
  $USER = "root";
  $PASS = "jairo.silva.2032";
  $DATA = "test_php";

  $query = "create table if not exists n_php (numb int, namb varchar(30)) default charset = utf8";

  /* Criando uma tabela com PHP Orientado a Objetos */
  $database_connection = new mysqli($HOST, $USER, $PASS, $DATA);

  if($database_connection->connect_error) {
    die("Connection failed: " . $database_connection->connect_error);
  }

  /*
  if($database_connection->query($query) == true) {
    echo "Query OK!";
  } else {
    echo "Query error: " . $database_connection->error;
  }
  */

  /* Criando uma tabela com PHP Procedural */
  $database_connection->close();

  $database_connect = mysqli_connect($HOST, $USER, $PASS, $DATA);

  if(!$database_connect) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(mysqli_query($database_connect, $query)) {
    echo "Query OK!";
  } else {
    echo "Query error: " . mysqli_error($database_connect);
  }

  mysqli_close($database_connect);

?>
