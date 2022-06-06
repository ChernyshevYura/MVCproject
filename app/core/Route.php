<?php

class Route
{
    static function start()
    {
        $controller_name = 'Main';
        $action_name = 'index';
         
        $routes = explode('/', $_SERVER['REQUEST_URI']);

 
        if ( !empty($routes[1]) )
        {   
            $controller_name = $routes[1];
            if(preg_match('/id/', $controller_name)){
                $controller_name = explode("?", $controller_name);
                $controller_name = $controller_name[0];
            }
        }
         
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
            $action_name = explode("?", $action_name);
            $action_name = $action_name[0];

        }
 
        $model_name = ucfirst($controller_name) .'Model';
        $controller_name = ucfirst($controller_name) . 'Controller';
        $action_name = 'action_'.$action_name;
 

        $model_file = ($model_name).'.php';
        $model_path = "app/models/".$model_file;
        if(file_exists($model_path))
        {
            include "app/models/".$model_file;
        }
 
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "app/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "app/controllers/".$controller_file;
        }
         
        $controller = new $controller_name;
        $action = $action_name;
         
        if(method_exists($controller, $action))
        {
            $controller->$action();
        }
     
    }
     
}