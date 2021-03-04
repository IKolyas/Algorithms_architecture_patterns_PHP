<?php

namespace Decorator;
use Decorator\Decorators\EmailDecorator;
use Decorator\Decorators\ViberDecorator;
use Decorator\Enity\Message;


spl_autoload_register(function($class) {
    $ds = DIRECTORY_SEPARATOR;
    $class = preg_replace('/^Decorator/', '', $class);
    $filename = __DIR__ . str_replace('\\', $ds, $class) . '.php';
    require_once $filename;
});


$emailDecorator =  new EmailDecorator(new Message('Email Content'));
echo $emailDecorator->render() . '<br>';
$viberDecorator = new ViberDecorator(new Message('Viber Content'));
echo $viberDecorator->render() . '<br>';

