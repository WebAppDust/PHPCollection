<?php

namespace Collection\Exceptions;


class SingletonException extends ConventionException{
    const RFC000 = "do not call constructor directly";
    const RFC001 = "do not use method with name `Instance`";
    protected $cls = null;
    protected $note = null;
    protected $cat = null;
    protected $entity = null;


    function _construct( $cls, $note=SingletonException::RFC000, $code=null, $previous=null )
    {
        $this
    }
