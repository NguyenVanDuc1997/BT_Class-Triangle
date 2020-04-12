<?php

include_once ('Shape.php');
class Triangle extends Shape
{
    public $side1=1.0;
    public $side2=1.0;
    public $side3=1.0;

    public function __construct($name,$side1,$side2,$side3)
    {
        parent::__construct($name);
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }

    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getArea(){
        return (sqrt(pow(pow($this->getSide1(),2)+pow($this->getSide2(),2+pow($this->getSide3(),2)),2)-2*pow(pow($this->getSide1(),4+pow($this->getSide2(),4+pow($this->getSide3(),4))),2)))/4;
    }

    public function getPerimeter(){
        return $this->getSide1()+$this->getSide2()+$this->getSide3();
    }

    public function __toString()
    {
     parent::show();
     return "Dien tich tam giac la: ".$this->getArea()."<br>"."Chu vi tam giac la: ".$this->getPerimeter();
    }
}