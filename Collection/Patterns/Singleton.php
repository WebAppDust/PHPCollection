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


function runtest($cls){
    $class = null;
    try{
        $class = Singleton::getInstance();
    }catch( \Throwable $e ){}
    
    if( $class != null ) throw new \Exception("Methods for childs included into protoType Singleton");
    
    $class = null;
    try{
        $class = new Singleton;
    }catch( \Throwable $e ){}
    
    if( $class != null ) throw new \Exception("Constructor of Prototype(S) is callable");
    
    if ( Singleton::isSingleton( $cls ) ){
        if( !Singleton::isInstantd( $cls ) ){
            
            if(false){
                throw new \Exception("Methods for prototype included into object Singleton");
            }

            $class = $cls::getInstance();$class->pp=1;
            $a=print_r($class,1);
            $class->__destruct(); unset($class);
            $b=print_r($cls::getInstance(),1);
            if ( !$a == $b ){
                throw new \Exception("object reconstructed");
            }
            
            
        }else{ throw new \Exception("test isInstantinated is true"); }
    }else{ throw new \Exception("test isSingleton is false"); }
}

class An extends h\Singleton{ 
    private static $__instance=null; 
}
runtest( "\Collection\Patterns\An" );



