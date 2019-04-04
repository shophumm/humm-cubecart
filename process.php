<?php
$params = array(
    '_g'     => 'remote',
    'type'   => 'gateway',
    'cmd'    => 'process',
    'module' => 'Humm'
);
require( '../../../ini.inc.php' );
$path = str_replace( '/modules/gateway/Humm', '', $GLOBALS['rootRel'] );
header( 'location: ' . $path . 'index.php?' . http_build_query( array_merge( $params, $_GET ) ) );