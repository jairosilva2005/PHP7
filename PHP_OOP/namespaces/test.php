<?php
  
  include './code_namespace.php';

  /* use code as c; > namespace alias
   * code/ > method or class 
   */

  use code as c;

  $code_test = new c\CodeClass("Code", true);
  echo $code_test->getnamespace_name() . PHP_EOL;
  echo $code_test->getverify() . PHP_EOL;

?>
