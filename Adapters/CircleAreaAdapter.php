<?php


namespace Adapter\Adapters;


use Adapter\Contracts\AdapterCircleAreaInterface;
use Adapter\Contracts\CircleInterface;

class CircleAreaAdapter implements AdapterCircleAreaInterface
{

    protected CircleInterface $circle;

    public function __construct($circle)
    {
        $this->circle = $circle;
    }

    public function circleArea(): float
    {
        // TODO: Implement getArea() method.
        return $this->circle->getCircumference() / M_PI;
    }

}