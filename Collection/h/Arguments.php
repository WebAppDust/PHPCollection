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


    public function __valid(){
        if( is_integer( $this->argc ) 
            &&$this->argc > 0
            &&is_array( $this->argv )
            &&$this->argc == count( $this->argv ) )
        {
            for(/*var*/ $i = 0; $i < $this->argc; $i++){
                if( !key_exist( $i, $this->argv )
                      or !is_string( $this->argv[ $i ] ) )
                {
                    return false;
                }else{
                    continue;
                }
            }
        }else{
            return false;
        }
        return true;
    }
}
