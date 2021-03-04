<?php


namespace Adapter\Adapters;


use Adapter\Contract\MessengerInterface;
use Adapter\Entity\ViberMessage;

class ViberAdapter implements MessengerInterface
{
    protected ViberMessage $viber;

    public function __construct(ViberMessage $viber)
    {
        $this->viber = $viber;
    }

    /**
     * @param string $content
     * @param string $name
     * @return void
     */
    public function message(string $content, string $name): void
    {
        // TODO: Implement message() method.

        $this->viber->send($content, $name);
    }

}