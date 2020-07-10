<?php

namespace App\Core;

class Parameter
{
    /**
     * @var $parameter 
     */
    private $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    /**
     * @return mixed
     */
    public function getParam($name)
    {
        if (isset($this->parameter[$name])) {
            return $this->parameter[$name];
        }
    }

    /**
     * @param $name
     * @param $value
     */
    public function setParam($name, $value)
    {
        $this->parameter[$name] = $value;
    }
}