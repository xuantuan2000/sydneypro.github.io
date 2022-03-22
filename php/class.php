<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Class</title>
</head>

<body>
	<style>
		html{
			font-size: 20px
		}
	</style>
	<?php
	class my_class
	{
		public function __construct()
		{
			echo 'Class đã được khởi tạo ';
			echo "<br>";
		}
	}
	$class1 = new my_class;

	class Animals
	{
		// Properties
		public $name;
		public $color;

		// Methods
		function set_name($name)
		{
			$this->name = $name;
		}
		function get_name()
		{
			return $this->name;
		}
		function set_color($color)
		{
			$this->color = $color;
		}
		function get_color()
		{
			return $this->color;
		}
	}

	$dogs = new Animals();
	$dogs->set_name('Milo');
	$dogs->set_color('Black');
	echo "Name: " . $dogs->get_name();
	echo "<br>";
	echo "Color: " .  $dogs->get_color();
	echo "<br>";
	// sắp xếp mảng tăng dần
	class sap_xep_mang
	{
		protected $_asort;

		public function __construct(array $asort)
		{
			$this->_asort = $asort;
		}
		public function ham_sap_xep()
		{
			$sorted = $this->_asort;
			sort($sorted);
			return $sorted;
		}
	}
	$sort_tangdan = new sap_xep_mang(array(14, 89, 4, -35, 1, 190, -9));
	echo "Mảng sau khi sắp xếp tăng dần: ";
	foreach ($sort_tangdan->ham_sap_xep() as $x) {
		echo "$x " . ", ";
	}
	echo "<br>";

	//tính toán
	class MyCalculator
	{
		private $_fval, $_sval;

		public function __construct($fval, $sval)
		{
			$this->_fval = $fval;
			$this->_sval = $sval;
		}

		public function add()
		{
			return $this->_fval + $this->_sval;
		}

		public function subtract()
		{
			return $this->_fval - $this->_sval;
		}

		public function multiply()
		{
			return $this->_fval * $this->_sval;
		}

		public function divide()
		{
			return $this->_fval / $this->_sval;
		}
	}
	$mycalc = new MyCalculator(20, 35);
	echo 'Phép tính 2 số:' . "<br>";
	echo '20 + 35 = ' . $mycalc->add();
	echo "<br>";
	echo '20 * 35 = ' . $mycalc->multiply();
	echo "<br>";
	echo '20 - 35 = ' . $mycalc->subtract();
	echo "<br>";
	echo '20 / 35 = ' . $mycalc->divide();
	?>
</body>

</html>