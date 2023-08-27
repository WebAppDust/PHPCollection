<?php
/**
 * Singleton abstraction layer.
 **/
namespace Collection\Patterns\h; 


final abstract class Singleton implements \h\Interfaces\Singleton{
    final protected static /* private const*/ $__instance = null;
    
    
    final protected static function getInstance() {
        if ( self::$__instance === null ){
            self::$__instance = new /*self*/ static;
        }
        return self::$__instance;
    }

    
    final public static function Instance(){
        throw new Collection\Exceptions\SingletoneException(
            Collection\Exceptions\SingletoneException::RFC001
        );
    }
    
    final public static function hasInstance(){
        return null !== self::$__instance;
    }
     
    protected function __construct(){
        if ( self::$__instance ){
            throw new Collection\Exceptions\SingletoneException(
                 Collection\Exceptions\SingletoneException::RFC000
            );
        }
    }
}


