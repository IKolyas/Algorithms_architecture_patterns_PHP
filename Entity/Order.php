<?php


namespace Strategy\Entity;


use Strategy\Contracts\Payment;

class Order
{
    protected $sum;
    protected $numberPhone;

    /**
     * Order constructor.
     * @param float $sum
     * @param string $numberPhone
     */
    public function __construct($sum, $numberPhone)
    {
        $this->sum = $sum;
        $this->numberPhone = $numberPhone;
    }

    public function getOrderSum()
    {
        return $this->sum;
    }

    public function getOrderNumberPhone()
    {
        return $this->numberPhone;
    }

}