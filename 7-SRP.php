<?php

namespace BadExample {

	class Circle {
	}

	class Square {
	}

	class AreaCalculator {

		protected $shapes;

		public function __construct( $shapes = array() ) {
			$this->shapes = $shapes;
		}

		public function sum() {
			$sum = 0;
			/* calculate here */
			return $sum;
		}

		public function output() {
			return implode( '', array(
				"<h1>",
				"Sum of the areas of provided shapes: ",
				$this->sum(),
				"</h1>"
			) );
		}
	}

	$shapes = array(
		new Circle( 2 ),
		new Square( 5 ),
		new Square( 6 )
	);

	$areas = new AreaCalculator( $shapes );

	echo $areas->output();
}

namespace GoodExample {

	class Circle {
	}

	class Square {
	}

	class AreaCalculator {
	}

	class SumCalculatorOutputter {
	}

	$shapes = array(
		new Circle( 2 ),
		new Square( 5 ),
		new Square( 6 )
	);

	$areaCalculator = new AreaCalculator( $shapes );

	$output = new SumCalculatorOutputter( $areaCalculator );

	echo $output->JSON();
	echo $output->HAML();
	echo $output->HTML();
	echo $output->JADE();


}