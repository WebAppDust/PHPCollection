<?php return Collection\Patterns\Route::assign(
  include (dirname(__FILE__).DS.'default-host.preset.nril.php'),
  include (dirname(__FILE__).DS.'default-executor.preset.nril.php'),                                             
  include (dirname(__FILE__).DS.'default-remote-host.preset.nril.php'),
  include (dirname(__FILE__).DS.'default-connection.preset.nril.php'),                                             
  include (dirname(__FILE__).DS.'default-protocol.preset.nril.php')
  /* ... */
);
