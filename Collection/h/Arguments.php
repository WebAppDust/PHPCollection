<?php
namespace Collection\h;


abstract class Arguments implements Interfaces\Arguments{
    public function __get($name){
        switch($name){
            case 'argc':
            return $this->argc();
            break;
            case 'argv':
            return $this->argv();
            break;
            default: return $this->{$name};break;
        }
    }
}
