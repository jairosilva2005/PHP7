<?php
  class Person {
    public $name;
    public $age;
    public $country;

    function __construct($_name, $_age, $_country) {
      $this->name = $_name;
      $this->age = $_age;
      $this->country = $_country;
    }

    function get_name() {
      return $this->name;
    }
    function get_age() {
      return $this->age;
    }
    function get_country() {
      return $this->country;
    }
  }

  $first_person = new Person("Jairo", 16, "Brazil");
  echo "Name: ". $first_person->get_name() .PHP_EOL;
  echo "Age: " . $first_person->get_age()  .PHP_EOL;
  echo "Country: ". $first_person->get_country() . PHP_EOL;
?>
