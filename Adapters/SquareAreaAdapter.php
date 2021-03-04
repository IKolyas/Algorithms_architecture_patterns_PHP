<?php


namespace Adapter\Adapters;


use Adapter\Contracts\AdapterSquareAreaInterface;
use Adapter\Contracts\SquareInterface;

class SquareAreaAdapter implements AdapterSquareAreaInterface
{

    protected SquareInterface $square;

    public function __construct($square)
    {
        $this->square = $square;
    }

    public function squareArea(): float
    {
        // TODO: Implement squareArea() method.
        return sqrt(2) * $this->square->sideSquare();
    }

}