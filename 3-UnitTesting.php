<?php

namespace BadExample {

	function GetTimeOfDay() {

		$time = new \DateTime( 'NOW' );
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

namespace GoodExample {

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

	use \PHPUnit\Framework\TestCase;

	class HourTest extends TestCase {

		public function testGetTimeOfDayByHour_For6AM_ReturnsMorning() {

			$a = \GoodExample\GetTimeOfDayByHour( 7 ); // 0 based hour sucka!
			$this->assertEquals( $a, 'Morning' );
		}

		public function testGetTimeOfDayByHour_For10pm_ReturnsEvening() {

			$a = \GoodExample\GetTimeOfDayByHour( 11 ); // 0 based hour sucka!
			$this->assertEquals( $a, 'Evening' );
		}
	}
}

