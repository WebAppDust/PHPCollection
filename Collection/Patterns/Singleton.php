<?php
/**
 * 
 **/
namespace Collection\Patterns; 


class Singleton implements \h\Interfaces\Singleton{ //loader
    protected static /*const*/$instance; //or private with self
    
    
    protected static function getInstance() {
        if ( !self::$instance ){
            self::$instance = new self;
        }
        return self::$instance;
    }


    function _construct(){};
}

