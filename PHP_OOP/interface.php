<?php
  
  interface IVehicle {
    public function show_info(): void;
  }

  class Motorcicle implements IVehicle {
    private $color;
    private $model_name;

    public function __construct($_color, $_model_name) {
      $this->color = $_color;
      $this->model_name = $_model_name;
    }

    public function show_info(): void {
      echo "Motorcicle: {$this->color}, {$this->model_name}.";
    }

  }

  $first_motorcicle = new Motorcicle("Red", "CG");
  $first_motorcicle->show_info();

?>
