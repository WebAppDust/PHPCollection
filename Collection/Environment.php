<?php
namespace Collection;
/** Interpreter(depended) Environment Reading Interface.
* This is the final source for building a `static` route. And more.
* The Intrptr can always store and share the received arguments.
* By any specific I-face. Storing inside a script is faster, but
* not safe(instead of wrappers calling).
* Environment, - for a script, - it is the interface to all readable
* input on call time, excluding future IOStream processing.
* Work across driver. Intrptr env is singleton, but env is reusable.
**/
class Environment{
    private static $drivers = [ PHPXENV ]; //registry
    protected $executor = null; //field for executor env with accessible system callstack
    
}


/**
* Universal repr for each
**/
class EnvironmentIterator{
    
}
