<?php

  try {
    $database_connection = new PDO("mysql:host=localhost;dbname=php_operations", "root", "jairo.silva.2032");
    $stmt = $database_connection->prepare("select * from io_info");
    $stmt->execute();

    foreach($stmt->fetchAll() as $row) {
      echo "ID[{$row['ID']}], NOME[{$row['NAME']}], IDADE[{$row['AGE']}]" . PHP_EOL;
    }
  } catch(PDOException $error) {
    echo "Failed: " . $error->getMessage();
  }

  $database_connection = null;

?>
