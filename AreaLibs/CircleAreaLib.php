<?php


namespace Adapter\AreaLibs;


class CircleAreaLib
{
    public function getCircleArea(float $diameter): float
    {
        return ((M_PI * $diameter ** 2) / 4);
   }
}