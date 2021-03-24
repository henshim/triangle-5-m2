<?php


class Shape
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I'm a shape. My name is $this->name";
    }

}
