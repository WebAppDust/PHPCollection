<?php return Route::assign(
  include 'default-host.nril.php',
  include 'default-remote-host.nril.php',
  include 'default-protocol.nril.php',
  include 'default-http-header.nril.php',
  include 'default-http-get.nril.php'
); //<?>static call returns new Route [->assign], ...]&Route::merge=>new Router
