<?php

namespace Bad_Example {

	class PasswordReminder {

		private $dbConnection;

		public function __construct( MySQLConnection $dbConnection ) {
			$this->dbConnection = $dbConnection;
		}
	}

	interface DBConnectionInterface {
		public function connect();
	}

	class MySQLConnection implements DBConnectionInterface {
		public function connect() {
			return "Database connection";
		}
	}

	class PasswordReminder2 {

		private $dbConnection;

		public function __construct( DBConnectionInterface $dbConnection ) {
			$this->dbConnection = $dbConnection;
		}
	}


}