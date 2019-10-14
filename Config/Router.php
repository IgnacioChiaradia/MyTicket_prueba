<?php

namespace Config;

class Router
{

    public static function address(Request $request)
    {
        $controller = $request->getController() . 'Controller';
        $method = $request->getMethod();
        $parameter = $request->getParameter();

        //$ruta = ROOT . 'Controladoras/' . $controller . '.php';

        //require_once $ruta;
        self::ejecut(self::start($controller), $method, $parameter);
    }

    private static function start($controller)
    {
        $toshow = "Controllers\\"  . $controller;
        return new $toshow;
    }

    private static function ejecut($controller, $method, $parameter)
    {
        
        if (!isset($parameter)) {
            call_user_func(array($controller, $method));
        } else {
            call_user_func_array(array($controller, $method), $parameter);
        }

    }
}
