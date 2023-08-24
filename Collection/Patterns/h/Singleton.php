<?php
/**
 * 
 **/
namespace Collection\Patterns\h; 


abstract class Singleton implements \h\Interfaces\Singleton{
    protected private /*const*/$__instance;
    
    
    protected static function getInstance() {
        if ( !self::$__instance ){
            self::$__instance = new /*self*/ static;
        }
        return self::$__instance;
    }

    
    public final static function Instance(){
        throw new Collection\Exceptions\SingletoneException(
            Collection\Exceptions\SingletoneException::RFC001
        );
    }

    public static function hasInstance(){
        return null !== self::$__instance;
    }
    
    function __construct(){
        if ( self::$__instance ){
            throw new Collection\Exceptions\SingletoneException(
                 Collection\Exceptions\SingletoneException::RFC000
            );
        }
    }

    final public function __destruct(){ /*not destroy*/ }
}


