<?php

namespace Bad_Example {

	interface Shape {
	}

	class Rectangle implements Shape {

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
			$this->width = $height;
		}

		public function setWidth( $width ) {
			$this->height = $width;
			$this->width = $width;
		}
	}

	$box = new Square();

	$box->setHeight( 5 );
	$box->setWidth( 3 );

	assert( $box->area() == 15 );

}