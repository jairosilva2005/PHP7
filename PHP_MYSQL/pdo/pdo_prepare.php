<?php

    try {
        $database_connection = new PDO("mysql:host=localhost;dbname=php_operations", "root", "jairo.silva.2032");
        $stmt = $database_connection->prepare("INSERT INTO io_info (NAME, AGE) VALUES (:name, :age)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":age", $age);

        $name = "Maria";
        $age = 26;
        $stmt->execute();

        $name = "Antonio";
        $age = 76;
        $stmt->execute();
    } catch(PDOException $error) {
        echo "Connection failed: " . $error->getMessage();
    }

    $database_connection = null;

?>