<?php


namespace Strategy\Strategy;


use Strategy\Contracts\Payment;
use Strategy\Entity\Order;

class PaymentWebMoney implements Payment
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;

    }

    public function ToPay()
    {
        // TODO: Implement ToPay() method.
        echo 'Произведена оплата с помощью: ' . 'WebMoney' . '<br>' . 'На сумму: ' . $this->order->getOrderSum() . '<br>' . 'Контакт:' . $this->order->getOrderNumberPhone() . '<br>';
    }
}