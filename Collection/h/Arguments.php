<?php
namespace Collection\h;


abstract class Arguments implements Interfaces\Arguments{
    public function __set($name, $value){
        switch($name){
            case 'argc':
            throw new \Exception();
            break;
            case 'argv':
            throw new \Exception();
            break;
            default: return $this->{$name} = $value;break;
        }
    }


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
