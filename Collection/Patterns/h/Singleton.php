<?php
/**
 * 
 **/
namespace Collection\Patterns\h; 


abstract class Singleton implements \h\Interfaces\Singleton{
    protected private /*const*/$__instance;
    
    
    protected static function getInstance() {
        if ( !self::$__instance ){
            self::$__instance = new self;
        }
        return self::$__instance;
    }


    function _construct(){};
}

