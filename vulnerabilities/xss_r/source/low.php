<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {//test2222
	// Feedback for end user
	// Vulnerable?
	$html .= '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';//test333333
}

?>
