<?php

  namespace code;

  class CodeClass {
    private $namespace_name;
    private $verify;

    public function __construct($_namespace_name, $_verify) {
      $this->namespace_name = $_namespace_name;
      $this->verify = $_verify;
    }

    public function getnamespace_name() {
      return $this->namespace_name;
    }

    public function getverify() {
      return $this->verify;
    }
  }

?>
