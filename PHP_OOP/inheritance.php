<?php

	class Person {
		protected $name;
		protected $age;
		
		public function __construct($_name, $_age) {
			$this->name = $_name;
			$this->age = $_age;
		}

		protected function more_info() {
			echo "Only for that class and daughters.";
		}
	}

	class Employee extends Person {
		public function show_info() {
			echo "Name: ". $this->name .PHP_EOL;
			echo "Age: " . $this->age  .PHP_EOL;
			$this->more_info();
		}
	}

	$first_employee = new Employee("Jairo", 16);
	$first_employee->show_info();
	
	/*
		Keyword final
		Impede que uma classe contenha instâncias, e também impede que um método seja alterado.
	*/

	final class Example {
		private $ex;

		public function __construct($_ex) {
			$this->ex = $_ex;
		}

		final public function example_func() {
			return $this->ex;
		}
	}

?>
