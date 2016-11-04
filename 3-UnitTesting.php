<?php

namespace Bad_Example {

	use \DateTime;

	function GetTimeOfDay() {

		date_default_timezone_set( 'UTC' );

		$time = new DateTime( 'NOW' );

		$hour = intval( $time->format( 'H' ) );

		if ( $hour >= 0 && $hour < 6 ) {
			return "Night";
		}
		if ( $hour >= 6 && $hour < 12 ) {
			return "Morning";
		}
		if ( $hour >= 12 && $hour < 18 ) {
			return "Afternoon";
		}

		return "Evening";
	}
}

namespace Good_Example {

	function GetTimeOfDay( \DateTime $date_time ) {

		$hour = intval( $date_time->format( 'H' ) );

		if ( $hour >= 0 && $hour < 6 ) {
			return "Night";
		}
		if ( $hour >= 6 && $hour < 12 ) {
			return "Morning";
		}
		if ( $hour >= 12 && $hour < 18 ) {
			return "Afternoon";
		}

		return "Evening";
	}

}

namespace Gooder_Example {

	use \DateTime;

	function GetTimeOfDay( DateTime $date_time ) {

		$hour = intval( $date_time->format( 'H' ) );

		return GetTimeOfDayByHour( $hour );
	}

	function GetTimeOfDayByStr( $date_time_string ) {

		$date_time = new DateTime( $date_time_string );

		$hour = intval( $date_time->format( 'H' ) );

		return GetTimeOfDayByHour( $hour );
	}

	function GetTimeOfDayByHour( $hour ) {

		if ( $hour >= 0 && $hour < 6 ) {
			return "Night";
		}
		if ( $hour >= 6 && $hour < 12 ) {
			return "Morning";
		}
		if ( $hour >= 12 && $hour < 18 ) {
			return "Afternoon";
		}

		return "Evening";
	}
}

namespace {

	use \PHPUnit\Framework\TestCase;

	class HourTest extends TestCase {

		function __construct() {
			date_default_timezone_set( 'UTC' );
		}

		public function test_GetTimeOfDayByHour_For_6AM_Return_Morning() {

			$a = \Gooder_Example\GetTimeOfDayByHour( 7 );
			$this->assertEquals( $a, 'Morning' );
		}

		public function test_GetTimeOfDayByHour_For_10pm_Return_Evening() {

			$a = \Gooder_Example\GetTimeOfDayByHour( 11 );
			$this->assertEquals( $a, 'Evening' );
		}

		public function xtest_GetTimeOfDayByHour_For_1pm_Return_Evening() {

			$a = \Gooder_Example\GetTimeOfDayByStr( '1pm' );
			$this->assertEquals( $a, 'Afternoon' );
		}
	}
}