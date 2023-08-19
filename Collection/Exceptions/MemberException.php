<?php
/**
 * Behaviour of Application Exception.
 **/
namespace Collection\Exception;


class MemberException extends Exception{
    function _construct( $msg /**, TOBE...**/ ){
        Exception::_construct($msg); //applicationException
    }
}

function test(){ throw new MemberException("Not Application"); }
