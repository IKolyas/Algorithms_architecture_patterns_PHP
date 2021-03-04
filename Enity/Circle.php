<?php


namespace Adapter\Enity;


use Adapter\Contracts\CircleInterface;

class Circle implements CircleInterface
{
    protected float $circumference;

    public function __construct($circumference)
    {
        $this->circumference = $circumference;
    }

    public function circleArea(): float
    {
        // TODO: Implement circleArea() method.
        return ($this->circumference ** 2) / (4 * M_PI);
    }
    public function getCircumference() {
        return $this->circumference;
    }
}