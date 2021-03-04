<?php


namespace Adapter\Enity;


use Adapter\Contracts\SquareInterface;

class Square implements SquareInterface
{
    protected float $sideSquare;

    public function __construct($sideSquare)
    {
        $this->sideSquare = $sideSquare;
    }

    public function squareArea(): float
    {
        // TODO: Implement squareArea() method.
        return $this->sideSquare ** 2;
    }
    public function sideSquare() {
        return $this->sideSquare;
    }

}