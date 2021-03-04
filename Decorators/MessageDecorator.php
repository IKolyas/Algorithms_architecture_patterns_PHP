<?php


namespace Decorator\Decorators;


use Decorator\Contracts\MessageInterface;

abstract class MessageDecorator implements MessageInterface
{

    protected object $content;

    public function __construct(MessageInterface $content)
    {
        $this->content = $content;
    }

}