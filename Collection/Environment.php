<?php
namespace Collection;
/** Interpreter(depended) Environment Reading Interface.
* This is the final source for building a `static` route. And more.
* The Intrptr can always store and share the received arguments.
* By any specific I-face. Storing inside a script is faster, but
* not safe(instead of wrappers calling).
* Environment, - for a script, - it is the interface to all readable
* input on call time, excluding future IOStream processing(not descriptor).
* Work across driver(schems). Intrptr env is singleton, but env is reusable(emu, hypervisor).
**/
class Environment extends Singleton implements CommonEnvironment {
    /* private static $drivers = [ PHPXENV ]; registry */
    /*protected*/ const $lang = 'PHP';
    protected $executor = null; //field for executor env with accessible system callstack
    
}


/**
* Universal repr for each
**/
class EnvironmentIterator{
    
}
