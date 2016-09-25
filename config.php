<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

function json_view( $model ) {
	echo json_encode( $model, JSON_PRETTY_PRINT );
}