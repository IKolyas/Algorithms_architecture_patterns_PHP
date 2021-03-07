<?php


namespace Strategy\Contracts;


interface Payment
{
    /**
     * @return string
     */
    public function ToPay();
}