<?php
  class Bird {
    public $color;
    public $size;

    function __construct($_color, $_size) {
      $this->color = $_color;
      $this->size = $_size;
    }

    function __destruct() {
      echo "Bird: {$this->color}, {$this->size}" . PHP_EOL;
    }
  }

  $first_bird = new Bird("Red", "Small");
?>
