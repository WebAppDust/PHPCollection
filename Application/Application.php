<?php
/**
 * Just application
 **/
//namespace Application;


$router = Collection\Patterns\Router::getInstance();
$router::assign( new Route([], function(){ return 0; }) );
$router::assign( new Route(
  include 'config/default-get.nril.php', 
  function(){ return 'responce text';  }
));

$responce = $router::dispatch( RequestReaderInterfaceIterable );

echo $responce;

