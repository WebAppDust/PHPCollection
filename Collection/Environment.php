<?php
namespace Collection;
if( defined("PHP_VERSION_ID") == null || PHP_VERSION_ID < 70000 || PHP_VERSION_ID > 70035 ){
    die("FatalError: incompatible environment(".print_r(@PHP_VERSION_ID)."), execution stopped in "._FILE_); exit();
    //note: however, the namespace has already been used.
}

/** Interpreter(depended) Environment Reading Interface.
* This is the final source for building a `static` route. And more.
* The Intrptr can always store and share the received arguments.
* By any specific I-face. Storing inside a script is faster, but
* not safe(instead of wrappers calling).
* Environment, - for a script, - it is the interface to all readable
* input on call time, excluding future IOStream processing(not descriptor).
* Work across driver(schems). Intrptr env is singleton, but env is reusable(emu, hypervisor).
* This is not a wrapper for the entire api! 
* However, values ​​that can be taken as arguments, 
* including compatibility checks, will be included.
**/
class Environment extends Singleton implements CommonEnvironment {
    /*protected*/ const $lang = 'PHP'; // writed for *lang
    protected $executor = null; //field for storing executor info
    protected $stack    = null; //accessible system execution callstack

  
    function __construct(){
        
    }


    function getIntroduction(){
        $this->executor = [
            "name": "phpstream",
            "type"=>"stream",
            "scheme"=>'path/to/schm/PHP/'.PHP_VERSION_ID.'.php'
        ];

        $this->stack = [
            "type"=>"interpreter",
            "name"=>basename(PHP_BINARY),
            "location"=>dirname(PHP_BINARY),
            "scheme"=>'path/to/schm/PHP/'.basename(PHP_BINARY).DIRECTORY_SEPARATOR.PHP_VERSION_ID.'.php'
            "executor"=>&$this->executor
        ];
    }
}


/**
* Universal repr for each
**/
class EnvironmentIterator{
    
}
