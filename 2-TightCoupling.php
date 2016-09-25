<?php

// TightCoupling

namespace BadExample {

	class Door {
		/* functions this particular door should do */
	}

	class Window {
		/* functions this particular window should do */
	}

	class House {
		public function __construct() {
			$this->door   = new Door;
			$this->window = new Window;
		}
	}

	$houseMD = new House();

}

namespace BetterExample {

	interface IDoor {
		public function setLockType( $lock );
		/* functions every door should do */
	}

	interface IWindow {
		public function setGlassType( $glass );
		/* functions every window should do */
	}

	class FrenchDoor implements IDoor {
		private $lock;

		public function setLockType( $lock ) {
			$this->lock = $lock;
		}
	}

	class BayWindow implements IWindow {
		private $glass;

		public function setGlassType( $glass ) {
			$this->glass = $glass;
		}
	}

	class SlidingDoor implements IDoor {
		private $lock;

		public function setLockType( $lock ) {
			$this->lock = $lock;
		}
	}

	class House {

		public function __construct( IDoor $door, IWindow $window ) {
			$this->door   = $door;
			$this->window = $window;
		}
	}

	$house = new House( new SlidingDoor(), new Window() );

}