<?php

class hg {

	function t( $a ) {

		$b = $a['b'];
		$c = $a['c'];
		$d = $a['d'];

		if ( ! isset( $b ) ) {
			$b = false;
		}

		if ( false === $b ) {
			return;
		}

		echo "<$b $c=\"$d\"></$b>";
	}

}

class HtmlGenerator {

	function tag( $args ) {

		$element         = $args['element'];
		$attribute_name  = $args['attribute_name'];
		$attribute_value = $args['attribute_value'];

		if ( ! isset( $element ) ) {
			$element = false;
		}

		if ( false === $element ) {
			return;
		}

		echo "<$element $attribute_name=\"$attribute_value\"></$element>";
	}
}

// Use lowercase letters in variable, action, and function names (never camelCase). Separate words via underscores. Don’t abbreviate variable names unnecessarily; let the code be unambiguous and self-documenting.

function some_name( $some_variable ) { /* ... */ }

// Class names should use capitalized words separated by underscores. Any acronyms should be all uppercase.

class Walker_Category extends Walker { /* ... */ }
class WP_HTTP { /* ... */ }

// Constants should be in all upper-case with underscores separating words:

define( 'DOING_AJAX', true );

// Files should be named descriptively using lowercase letters. Hyphens should separate words.

require 'my-plugin-name.php';

// Class file names should be based on the class name with class- prepended and the underscores in the class name replaced with hyphens, for example WP_Error becomes:

require 'class-wp-error.php';


