<?php
  
  trait More {
    public function showInfo(): void {
      echo "More info." . PHP_EOL;
    }

    public function sun($_x, $_y): int {
      return $_x + $_y;
    }
  }

  class Example {
    use More;
  }

  $exampleObj = new Example();
  $exampleObj->showInfo();
  echo $exampleObj->sun(12, 12);
?>
