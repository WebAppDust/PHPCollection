<?php
namespace Collection;
/** Interpreter(depended) Environment Reader Interface.
* It's a source for finnally `static` route building.
* Intrptr always has storing and sharing received arguments.
* By any specific I-face. Storing inside script is faster, but
* insecure way(instead of wrappers calling).
* Environment, - for script, - it`s interface to all readable
* inputs on runtime, exclude IOStream treatments in future.
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
