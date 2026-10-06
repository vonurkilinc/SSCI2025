<?php
//definitions
define('APATH_BASE', dirname(__FILE__) );
define( 'DS', DIRECTORY_SEPARATOR); 
//Global definitions
//lmpn framework path definitions
$parts = explode( DS, APATH_BASE );
array_pop( $parts );

//Defines
define( 'APATH_ROOT',	implode( DS, $parts ) );

// Modules
define( 'APATH_MODULES', 				APATH_BASE.DS.'model'.DS);
define( 'APATH_SANITIZE', 				APATH_MODULES.'sanitize');

// define ( 'ENV','pdt' );
define( 'APATH_CONFIG',					APATH_BASE.DS.'config.php'); 

?>
