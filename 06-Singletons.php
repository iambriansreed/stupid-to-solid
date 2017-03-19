<?php

// Singletons


namespace Bad_Example1 {

	class DB {

		private static $instance;

		private function __construct() {
			/* do something here */
		}

		public static function getInstance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		private $password = '';

		public function changePassword( $password ) {
			$this->password = $password;
		}

		public function getPassword() {
			return $this->password;
		}

		/* other methods here */
	}

	function run() {

		$db1 = DB::getInstance();

		$db1->changePassword( 'incorrect' );

		$db2 = DB::getInstance();

		json_view( array( '$db1->password' => $db1->getPassword(), '$db2->password' => $db2->getPassword() ) );
	}

}

namespace BetterExample {

	class DB {

		var $data = 0;

		public function __construct() {
		}

		public function changeData( $data ) {
			$this->data = $data;
		}

		/* other methods here */
	}

	function DBFactory() {

		global $db;

		if ( ! isset( $db ) ) {
			$db = new DB();
		}

		return $db;
	}

	function run() {

		$db1 = DBFactory();

		$db1->changeData( 1234 );

		$db2 = DBFactory();

		$db2->changeData( 4567 );

		json_view( array( '$db1->data' => $db1->data, '$db2->data' => $db2->data ) );
	}

}