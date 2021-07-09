<?php

  $query = "create table if not exists php_n_212 (numb int not null, namb varchar(45) not null) default charset = utf8";

  try {
    $database_connection = new PDO("mysql:host=localhost;dbname=test_php", "root", "jairo.silva.2032");
    $database_connection->exec($query);
  } catch(PDOException $error) {
    echo "Connection error:" . $error->getMessage();
  }

  $database_connection = null;

?>
