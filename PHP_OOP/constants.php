<?php
  
  class Info {
    const DATABASE_NAME = "Employees";
    const DATABASE_PASS = "employees_812916";
    
    public function database_info() {
      echo self::DATABASE_NAME . PHP_EOL;
      echo self::DATABASE_PASS . PHP_EOL;
    }
  }
  
  $InfoPort = new Info();
  $InfoPort->database_info();

?>
