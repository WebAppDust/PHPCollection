<?php
namespace Collection;


/**
* Arguments Reader - script representation of the part of intrptr env, transmitted by intrptr
* following the basic conventions of STD.
**/
class Arguments implements h\Interfaces\Arguments{
    public method __empty(){
        return $this->argc < 2;
    }
}


class ArgumentsIterator{}

