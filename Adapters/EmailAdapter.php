<?php


namespace Adapter\Adapters;


use Adapter\Contract\MessengerInterface;
use Adapter\Entity\EmailMessage;

class EmailAdapter implements MessengerInterface
{
    protected EmailMessage $email;

    public function __construct(EmailMessage $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $content
     * @param string $name
     * @return void
     */
    public function message(string $content, string $name): void
    {
        // TODO: Implement message() method.
        $this->email->send($content, $name);
    }
}