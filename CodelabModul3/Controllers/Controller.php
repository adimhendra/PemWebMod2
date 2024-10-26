<?php

namespace Controllers;

class Controllers
{
    // variable attributes
    var $controllerName;
    var $controllerMethod;

    // method untuk mengambil semua artibut
    public function getControllerAttribute( )
    {
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod,
        ];
    }   
}