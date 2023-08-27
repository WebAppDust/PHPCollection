<?php
/**
 * 
 **/
namespace Collection\Patterns\h\Interfaces;


/* public */interface Singleton /*, oBehaviour*/{
    //private static $__instance;
    
    function _construct();
    function Instance();
    function hasInstance();
}

