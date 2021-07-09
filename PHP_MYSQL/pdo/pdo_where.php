<?php

  const HOST  = "localhost";
  const USER  = "root";
  const PASS  = "jairo.silva.2032";
  const DATA  = "php_operations";
  const QUERY = "SELECT ID, AGE FROM io_info WHERE ID <= 4";

  /* Buscando dados com WHERE usando PDO */

  try {
    $database_connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATA, USER, PASS);
    
    $statement = $database_connection->prepare(QUERY);
    $statement->execute();

    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

    foreach($statement->fetchAll() as $row) {
      echo "ID[{$row['ID']}], NAME[{$row['AGE']}]" . PHP_EOL;
    }
  } catch(PDOException $e) {
    echo "PDO Exception: " . $e->getMessage();
  }

  $database_connection = null;

?>
