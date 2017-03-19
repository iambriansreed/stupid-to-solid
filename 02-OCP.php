<?php

namespace Bad_Example {

	class Area_Calculator {

		protected $shapes;

		public function __construct( $shapes = array() ) {
			$this->shapes = $shapes;
		}

		public function result() {

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

namespace Good_Example {

	interface IShape {

		public function area();
	}

	class Rectangle implements IShape {

		protected $width;
		protected $height;

		public function setHeight( $height ) {
			$this->height = $height;
		}

		public function setWidth( $width ) {
			$this->width = $width;
		}

		public function area() {
			return $this->width * $this->height;
		}
	}

	class Area_Calculator {

		protected $shapes = array();

		public function __construct( array $shapes ) {
			$this->validateShapes( $shapes );
			$this->shapes = $shapes;
		}

		public static function validateShapes( $shapes ) {
			foreach ( $shapes as $shape ) {
				if ( ! ( $shape instanceof IShape ) ) {
					throw new \Exception( 'All shapes must implement the IShape interface.' );
				}
			}
		}

		public function result() {
			$areas = array_map( function ( IShape $shape ) {
				return $shape->area();
			}, $this->shapes );

			return array_sum( $areas );
		}
	}

}


