<?php

  $query = "insert into php_values(NUM_VALUES, CHAR_VALUES) values('50', 'Cinquenta')";

  try {
    $database_connection = new PDO("mysql:host=localhost;dbname=test_php", "root", "jairo.silva.2032");
    $database_connection->exec($query);
  } catch(PDOException $error) {
    echo "Connection error: " . $error->getMessage();
  }

  $database_connection = null;
?>
