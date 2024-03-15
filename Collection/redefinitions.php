<?php


define( '_DS', DIRECTORY_SEPARATOR );
define( '_FD', dirname( __FILE__ ) );

define( '_API', _FD.PHP_VERSION_ID._DS ); //branch commutation
if( defined("PHP_VERSION_ID") == null || PHP_VERSION_ID < 70000 || PHP_VERSION_ID > 70035 || !is_dir(_API) ){
    die("FatalError: incompatible environment(".print_r(@PHP_VERSION_ID)."), execution stopped in ".__FILE__); exit();
    //note: however, the namespace has already been used.
}

