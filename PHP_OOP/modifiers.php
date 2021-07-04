<?php
	class Dog {
		public $color; /* Visible */
		protected $size; /* Visible only to child classes */
		private $breed; /* Visible only in this class */
		function __construct($_color, $_size, $_breed) {
			$this->color = $_color;
			$this->size = $_size;
			$this->breed = $_breed;
		}
		function __destruct() {
			echo "Dog: {$this->color}, {$this->size}, {$this->breed}";
		}
	}
	$first_dog = new Dog("Black and Brown", "Big", "American");
?>