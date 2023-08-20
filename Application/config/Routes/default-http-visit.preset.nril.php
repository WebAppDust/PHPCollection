<?php return Collection\Patterns\Route::assign( //Note: NativeRIL is struct{type=>list...
  include (dirname(__FILE__).DS.'default-host.preset.nril.php'),
  include (dirname(__FILE__).DS.'default-executor.preset.nril.php'),                                             
  include (dirname(__FILE__).DS.'default-remote-host.preset.nril.php'),
  include (dirname(__FILE__).DS.'default-connection.preset.nril.php'),                                             
  include (dirname(__FILE__).DS.'default-protocol.preset.nril.php'),
  include (dirname(__FILE__).DS.'default-http-header.preset.nril.php'),
  include (dirname(__FILE__).DS.'default-http-path.preset.nril.php'),
  [ 'type'=>"query" ] //empty
); //<?>static call builder method returns new Route [->assign], ...],
   //the incomplete object, where Route[r]::merge=>new Router
