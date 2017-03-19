<?php

namespace Bad_Example {

	class Area_Calculator {

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

	$areas = new Area_Calculator( $shapes );

	echo $areas->output();
}

namespace Good_Example {

	class Data_Outputter {

		private $data;

		public function __construct( $data ) {
			$this->data = $data;
		}

		public function JSON() {
			echo json_encode( $this->data );
		}

		public function HTML() {
			echo "<h1>",
			"Sum of the areas of provided shapes: ",
			$this->data,
			"</h1>";
		}
	}

	$output = new Data_Outputter( $data );

	$output->JSON();
	$output->HAML();
	$output->HTML();
	$output->JADE();


}