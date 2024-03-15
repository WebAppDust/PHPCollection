<?php
/**
 * Just application
 * Program.
 * 1) using a understanding and adaptable image, check compatibility and provide
 *    a specific interface for interaction with the executing thread 
 *    (its own representation) as environment. 
 * 2) project data from the environment onto the configuration image.
 * 3) find the configuration among the configured routes 
 * 4) get the result of processing the selected route
 * 4.1) formulate the request separately from the route.
 * 5) formalize the result(of 4) in a response solution.
 **/
//namespace Application;
!defined( '_CD' )? define( '_CD', dirname( __FILE__ ) ): null;
!defined( '_CF' )? define( '_CF', basename( __FILE__ ) ): null;
include_once _CD.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'defines.php';

$router = Collection\Patterns\Router::getInstance();
$router::assign( new Route([], function(){ return 0; }) );
$router::assign( 
  include 'config/default-http-s-visit.rb.php', 
  function( $args ){ return 'responce: request('.print_r( $args, true ).")";  }
);

$responce = $router::dispatch( RequestReaderInterfaceIterable );

echo $responce->toStr().PHP_EOL;

