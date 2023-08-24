<?php
namespace Collection\Patterns;


final class Singleton { //
    protected function __construct(){  }
    
    public static function isSingleton( $class ){
        if( is_subclass_of( $class, "\Collection\Patterns\h\Singleton" ) )
        {
            return true;
        }
        return false;
    }
    
    public static function isInstantd( $class ){
        if( !self::isSingleton( $class ) )
            throw new \TypeError("`{$name}` is not a singleton");
        if( !is_subclass_of( $class, "\Collection\Patterns\h\Singleton" ) )
            throw new \TypeError("`{$name}` is not a singleton");
        return $class::hasInstance();
    }
    
    public static function isValidSingleton( $class ){}
}
