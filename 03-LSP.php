<?php

namespace Bad_Example {

	class Rectangle implements \Good_Example\IShape {

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

	$box = new Rectangle();

	$box->setHeight( 5 );
	$box->setWidth( 3 );

	assert( $box->area() == 15 );

	class Square extends Rectangle {

		public function setHeight( $height ) {
			$this->height = $height;
			$this->width  = $height;
		}

		public function setWidth( $width ) {
			$this->height = $width;
			$this->width  = $width;
		}
	}

	$box = new Square();

	$box->setHeight( 5 );
	$box->setWidth( 3 );

	assert( $box->area() == 15 );

}

namespace Good_Example {

	class Square implements IShape {

		protected $side;

		public function setSide( $side ) {
			$this->side = $side;
		}

		public function area() {
			return pow( $this->side, 2 );
		}
	}

}