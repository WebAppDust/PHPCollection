<?php return Collection\Patterns\Route::assign(
  include (dirname(__FILE__)._DS.'default-host.preset.nril.php'),
  include (dirname(__FILE__)._DS.'default-executor.preset.nril.php'),
  include (dirname(__FILE__)._DS.'default-arguments.preset.nril.php'),
  include (dirname(__FILE__)._DS.'default-remote-host.preset.nril.php'),
  include (dirname(__FILE__)._DS.'default-connection.preset.nril.php'),                                             
  include (dirname(__FILE__)._DS.'default-protocol.preset.nril.php')
  /* ... */
);
