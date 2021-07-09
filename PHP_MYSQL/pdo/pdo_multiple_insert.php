<?php

  try {
    $database_connection = new PDO("mysql:host=localhost;dbname=test_php", "root", "jairo.silva.2032");
    
    $database_connection->beginTransaction();
    $database_connection->exec("INSERT INTO php_values (numb, numa) VALUES ('10', '10_P')");
    $database_connection->exec("INSERT INTO php_values (numb, numa) VALUES ('20', '20_P')");
    $database_connection->exec("INSERT INTO php_values (numb, numa) VALUES ('30', '30_P')");
    $database_connection->exec("INSERT INTO php_values (numb, numa) VALUES ('40', '40_P')");
    $database_connection->commit();

    echo "Query OK!";
  } catch(PDOException $error) {
    $database_connection->rollback();
    echo "Connection failed: " . $error->getMessage();
  }

  $database_connection = null;

?>
