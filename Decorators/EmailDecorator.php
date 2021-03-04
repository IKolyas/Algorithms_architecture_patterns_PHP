<?php


namespace Decorator\Decorators;


class EmailDecorator extends MessageDecorator
{
    public function render(): string
    {
        // TODO: Implement render() method.
        return 'MessageText to Email: ' . '<i>' . $this->content->render() . '</i>';
    }
}