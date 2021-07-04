<?php

  abstract class Vehicle {
    private $color;
    abstract function set_color($_color): void;
    abstract function get_color(): string;
  }

  class Car extends Vehicle {
    function set_color($_color): void {
      $this->color = $_color;
    }

    function get_color(): string {
      return $this->color;
    }
  }

  $first_car = new Car();
  $first_car->set_color("Blue");
  echo "Color: " . $first_car->get_color() . PHP_EOL;

?>
