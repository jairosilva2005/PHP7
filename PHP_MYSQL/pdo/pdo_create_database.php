<?php

  /* Estabelecendo conexão com o servidor */
  try { 
    $database_connection = new PDO("mysql:host=localhost", "root", "jairo.silva.2032");
    echo "Connected successfully!";
  } catch(PDOException $error) {
    echo "Connection error: " . $error->getMessage();
  }

  /* Executando uma Query no servidor */
  try {
    $SQL = "CREATE DATABASE test_database_php CHARSET utf8 COLLATE utf8_general_ci";
    $database_connection->exec($SQL);
    echo "SQL Query successfully execute!";
  } catch(PDOException $error) {
    echo "SQL Query error: " . $error->getMessage();
  }

?>
