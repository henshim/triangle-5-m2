<?php

include 'Shape.php';
class Triangle extends Shape
{
    public $side1=1;
    public $side2=1;
    public $side3=1;

    public function __construct(){}

    public function __construct2($side1,$side2,$side3){
      $this->side1=$side1;
      $this->side2=$side2;
      $this->side3=$side3;
    }

    /**
     * @return mixed
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param mixed $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return mixed
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param mixed $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return mixed
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param mixed $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getArea(){
        return (1/4)*sqrt(($this->side1+$this->side2+$this->side3)
                *($this->side1+$this->side2-$this->side3)
                *($this->side2+$this->side3+$this->side1)
                *($this->side3+$this->side1+$this->side2));
    }

    public function getPerimeter(){
        return $this->side1+$this->side2+$this->side3;
    }

    public function toString(){
        return 'diện tích tam giác: '.$this->getArea().'<br>'.'chu vi tam giác: '.$this->getPerimeter();
    }
}