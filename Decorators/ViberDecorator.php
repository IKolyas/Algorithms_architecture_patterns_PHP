<?php


namespace Decorator\Decorators;


class ViberDecorator extends MessageDecorator
{
    public function render(): string
    {
        // TODO: Implement render() method.
        return 'MessageText to Viber: ' . '<b>' . $this->content->render() . '</b>';
    }
}