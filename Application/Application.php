<?php
/**
 * Just application
 program.
1) make the current configuration of the execution environment
2) return the redirect result according to the received configuration
2.1) find the request among the configured routes or consider it the default and return the result of route processing
2.2) issue the result in response (solution)
 **/
//namespace Application;
defined( '_CD' )? define( '_CD', dirname( __FILE__ ) ): null;
defined( '_CF' )? define( '_CF', basename( __FILE__ ) ): null;
include_once _CD.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'defines.php';

$router = Collection\Patterns\Router::getInstance();
$router::assign( new Route([], function(){ return 0; }) );
$router::assign( 
  include 'config/default-http-s-visit.rb.php', 
  function( $args ){ return 'responce: request('.print_r( $args, true ).")";  }
);

$responce = $router::dispatch( RequestReaderInterfaceIterable );

echo $responce->toStr().PHP_EOL;

