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
        $this->note = $note;
        $this->cat = "Singleton Convention";
        $this->entity = get_class/*name*/( $cls ); //Singleton::isSingleton
    }


    function getMessage(){
        return get_class($this) . ": " . $this->note . ', ' . $this->cat . ' {key}';
    }
}
