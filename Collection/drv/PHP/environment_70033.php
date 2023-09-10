<?php
//PHP-70033 Language specification self-description (just a li'l bit)
class environment_70033{
   function getExecutor(){
     return [
       "name": "phpstream",
       "type"=>"stream",
       "scheme"=>'Collection/schm/PHP/spec_'.PHP_VERSION_ID.'.php'
     ];
   }
   
   function getExecutionStack(){
     return [
       "type"=>"interpreter",
       "name"=>basename(PHP_BINARY),
       "location"=>dirname(PHP_BINARY),
       "scheme"=>'path/to/schm/PHP/'.basename(PHP_BINARY).DIRECTORY_SEPARATOR.PHP_VERSION_ID.'.php'
       "executor"=>&$this->executor
     ];
   }
}
