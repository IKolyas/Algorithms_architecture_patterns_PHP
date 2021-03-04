<?php


namespace Adapter\Contract;


interface MessengerInterface
{

    /**
     * @param string $content
     * @param string $name
     * @return void
     */
    public function message(string $content, string $name): void;
}
