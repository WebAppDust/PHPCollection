<?php return Collection\Patterns\Route::assign( //Note: NativeRIL is struct{type=>list...
  include (dirname(__FILE__).DS.'default-host.preset.nril.php'),
  include 'default-executor.preset.nril.php'),                                             
  include 'default-remote-host.preset.nril.php'),
  include 'default-connection.preset.nril.php'),                                             
  include 'default-protocol.preset.nril.php'),
  include 'default-http-header.preset.nril.php'),
  include 'default-http-path.preset.nril.php'),
  [ 'type'=>"query" ] //empty
); //<?>static call builder method returns new Route [->assign], ...]&Route::merge=>new Router
