<?php

  $HOST = "localhost";
  $USER = "root";
  $PASS = "jairo.silva.2032";
  $NAME = "test_php";

  try {
    $database_connection = new PDO("mysql:host={$HOST};dbname={$NAME}", $USER, $PASS);
    echo "Connected successfully!";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  
  /* Fechando a conexão com o banco de dados */

  $database_connection = null;

?>
