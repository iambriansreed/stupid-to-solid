<?php

namespace BadExample {

	class AreaCalculator {

		protected $shapes = array();

		public function __construct( array $shapes ) {
			$this->shapes = $shapes;
		}

public function sum() {

	$area = array();

	foreach ( $this->shapes as $shape ) {

		if ( is_a( $shape, 'Square' ) ) {

			$area[] = pow( $shape->length, 2 );

		} else if ( is_a( $shape, 'Circle' ) ) {

			$area[] = pi() * pow( $shape->radius, 2 );
		}
	}

	return array_sum( $area );
}
	}
}

namespace GoodExample {

	interface IShape {

		public function area();
	}

	class Square implements IShape {

		public $length;

		public function __construct( $length ) {
			$this->length = $length;
		}

		public function area() {
			return pow( $this->length, 2 );
		}
	}

	class AreaCalculator {

		protected $shapes = array();

		public function __construct( array $shapes ) {
			$this->shapes = $shapes;
		}

		public function AddShape( IShape $shape ) {
			$this->shapes[] = $shape;
		}

		public function sum() {

			$area = array();

			foreach ( $this->shapes as $shape ) {
				$area[] = $shape->area();
			}

			return array_sum( $area );
		}
	}
}


