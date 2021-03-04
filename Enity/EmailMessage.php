<?php


namespace Adapter\Entity;


class EmailMessage
{
    public string $message;
    public string $email;
    protected array $contacts;

    public function __construct()
    {
        $this->contactsList();
    }

    private function contactsList() {
        $this->contacts = [
            'Semen' => 'semen@mail.ru',
            'Ivan' => 'ivan@mail.ru'
        ];
    }

    private function getContact(string $name) {
        if (array_key_exists($name, $this->contacts)) {
            $this->email = $this->contacts[$name];
        } else {
            \ErrorException::class;
        }
    }

    public function send(string $content, string $name): void
    {
        $this->getContact($name);
        echo 'Email: ' . $this->email . '//' . $content . '<br>';
    }
}