<?php

  $HOST = "localhost";
  $USER = "root";
  $PASS = "jairo.silva.2032";
  $SQL = "CREATE DATABASE test_database_php CHARSET utf8 COLLATE utf8_general_ci";

  /* Com MySQLi Orientado a Objetos */

  $database_connection = new mysqli($HOST, $USER, $PASS);

  if($database_connection->connect_error) {
    echo "Connection error: " . $database_connection->connect_error;
  } else {
    echo "Connected successfully!";
  }

  /*
  if($database_connection->query($SQL) == true) {
    echo "Database created!";
  } else {
    echo "Query error: " . $database_connection->error;
  }
  */

  $database_connection->close();

  /* Com MySQLi procedural */

  $db_connection = mysqli_connect($HOST, $USER, $PASS);

  if(!$db_connection) {
    die("Connection error: " . mysqli_connect_error());
  } else {
    echo "Connected successfully!";
  }

  if(mysqli_query($db_connection, $SQL)) {
    echo "Query OK!";
  } else {
    echo "Query error: " . mysqli_error($db_connection);
  }

  mysqli_close($db_connection);

?>
