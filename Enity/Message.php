<?php


namespace Decorator\Enity;


use Decorator\Contracts\MessageInterface;

class Message implements MessageInterface
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
    public function render(): string
    {
        // TODO: Implement render() method.
        return htmlspecialchars($this->content);
    }

}