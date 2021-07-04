<?php

  /* Fruit class */
  class Fruit {    
    public $name;
    public $color;
    
    function set_name($_name) {
      $this->name = $_name;
    }

    function set_color($_color) {
      $this->color = $_color;
    }

    function get_name() {
      return $this->name;
    }

    function get_color() {
      return $this->color;
    }
  }

  $apple = new Fruit();
  $apple->set_name("Apple");
  $apple->set_color("Red");

  echo "Apple - Fruit" . PHP_EOL;
  echo "Name: ". $apple->get_name() .PHP_EOL;
  echo "Color: ". $apple->get_color() .PHP_EOL;

  /* Car class */
  class Car {
    public $color;
    public $model;
    public $manufacturer;

    function set_color($_color) {
      $this->color = $_color;
    }
    function set_model($_model) {
      $this->model = $_model;
    }
    function set_manufacturer($_manufacturer) {
      $this->manufacturer = $_manufacturer;
    }
    function get_color() {
      return $this->color;
    }
    function get_model() {
      return $this->model;
    }
    function get_manufacturer() {
      return $this->manufacturer;
    }
  }

  $uno = new Car();
  $uno->set_color("Red");
  $uno->set_model("S");
  $uno->set_manufacturer("Fiat");

  echo "Uno - Car" . PHP_EOL;
  echo "Color: ". $uno->get_color() .PHP_EOL;
  echo "Model: ". $uno->get_model() .PHP_EOL;
  echo "Manufacturer: ". $uno->get_manufacturer() .PHP_EOL;

  /* 
    Método instanceof(): bool
    Retorna se um objeto é instância de uma classe.
  */

  var_dump($apple instanceof Car);
  var_dump($apple instanceof Fruit);
  var_dump($uno instanceof Fruit);
  var_dump($uno instanceof Car);

?>
