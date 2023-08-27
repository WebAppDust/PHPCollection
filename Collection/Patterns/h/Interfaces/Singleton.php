<?php
/**
 * 
 **/
namespace Collection\Patterns\h\Interfaces;


/* public */interface Singleton /*, oBehaviour*/{
    //private static $__instance;
    
    /* protected *///function _construct();
    static function Instance();
    static function getInstance();
    static function hasInstance();
}

