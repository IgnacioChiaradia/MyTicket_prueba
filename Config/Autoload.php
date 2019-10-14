<?php

namespace Config;

class Autoload {
        
    public static function start() {

        spl_autoload_register(function($class){

            $classPath = ROOT . str_replace("\\", "/", $class)  . ".php";
            include_once($classPath);
        });
    }
}

?>
