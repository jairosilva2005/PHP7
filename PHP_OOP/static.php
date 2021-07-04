<?php
  
  /* Static methods */
  class Animal {
    public static function finish(): string {
      return "Object has been created!";
    }
  }

  class Bird extends Animal {
    private $color;

    public function __construct($_color) {
      $this->color = $_color;
    }

    function end_point() {
      echo parent::finish() . PHP_EOL;
    }
  }

  $first_bird = new Bird("Red");
  $first_bird->end_point();

  /* Static properties */
  class Values {
    public static $PI_VALUE = 3.14;

    public static function return_pi_value() {
      return self::$PI_VALUE;
    }
  }

  class ValuesChild extends Values {
    public function show_more_info() {
      echo "PI: [" . parent::$PI_VALUE . ", " . parent::return_pi_value() . "]" . PHP_EOL;
    }
  }

  $Value = new ValuesChild();
  $Value->show_more_info();

?>
