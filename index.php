<?php

namespace Adapter;



use Adapter\Adapters\CircleAreaAdapter;
use Adapter\Adapters\SquareAreaAdapter;
use Adapter\AreaLibs\CircleAreaLib;
use Adapter\AreaLibs\SquareAreaLib;
use Adapter\Enity\Circle;
use Adapter\Enity\Square;

spl_autoload_register(function($class) {
    $ds = DIRECTORY_SEPARATOR;
    $class = preg_replace('/^Adapter/', '', $class);
    $filename = __DIR__ . str_replace('\\', $ds, $class) . '.php';
    require_once $filename;
});

//использование внутренних классов
$circle = new Circle(12);
echo $circle->circleArea() . '<br>';

// подключение внешних библиотек
$circleAdapter = new CircleAreaAdapter($circle);
echo (new CircleAreaLib())->getCircleArea($circleAdapter->circleArea()) . '<br>';


//использование внутренних классов
$square = new Square(5);
echo $square->squareArea() . '<br>';

// подключение внешних библиотек
$squareAdapter = new SquareAreaAdapter($square);
echo (new SquareAreaLib())->getSquareArea($squareAdapter->squareArea()) . '<br>';