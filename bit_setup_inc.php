<?php
global $gBitSystem, $gBitSmarty;

$registerHash = array(
	'package_name' => 'filevault',
	'package_path' => dirname( __FILE__ ).'/',
);
$gBitSystem->registerPackage( $registerHash );

if( $gBitSystem->isPackageActive( 'filevault' ) ) {
	// Default Preferences Defines
	define('FILEVAULT_CONTENT_TYPE_GUID',     'filevault' );
	define('FILEVAULTFILE_CONTENT_TYPE_GUID', 'filevaultfile' );

	include_once( FILEVAULT_PKG_PATH.'FileVault.php' );
}
?>
