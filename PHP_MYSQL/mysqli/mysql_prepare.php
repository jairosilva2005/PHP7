<?php

  const HOST = "localhost";
  const DATA = "php_operations";
  const USER = "root";
  const PASS = "jairo.silva.2032";

  $database_connection = new mysqli(HOST, USER, PASS, DATA);

  $prepare_args = $database_connection->prepare("INSERT INTO io_info (NAME, AGE) VALUES (?, ?)");

  /* O caractere de identificação tem que ser 's'! */
  $prepare_args->bind_param("ss", $name, $age);

  $name = "Jairo";
  $age = 16;
  $prepare_args->execute();

  $name = "José";
  $age = 50;
  $prepare_args->execute();

  $prepare_args->close();
  $database_connection->close();

?>
