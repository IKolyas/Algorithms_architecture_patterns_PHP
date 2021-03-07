<?php
namespace Strategy;

use Strategy\Entity\Order;
use Strategy\Strategy\PaymentQiwi;
use Strategy\Strategy\PaymentWebMoney;
use Strategy\Strategy\PaymentYandex;

spl_autoload_register(function($class) {
    $ds = DIRECTORY_SEPARATOR;
    $class = preg_replace('/^Strategy/', '', $class);
    $filename = __DIR__ . str_replace('\\', $ds, $class) . '.php';
    require_once $filename;
});

$order = new Order(225.66, '+79009009999');

$qiwi = new PaymentQiwi($order);
$qiwi->ToPay();

$yandex = new PaymentYandex($order);
$yandex->ToPay();

$webMoney = new PaymentWebMoney($order);
$webMoney->ToPay();
