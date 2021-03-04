<?php


namespace Adapter\Entity;


class ViberMessage
{
    public string $message;
    public string $numberPhone;
    protected array $contacts;

    public function __construct()
    {
        $this->contactsList();
    }

    private function contactsList() {
        $this->contacts = [
            'Semen' => '89999999999',
            'Ivan' => '88888888888'
        ];
    }

    private function getContact(string $name) {
        if (array_key_exists($name, $this->contacts)) {
            $this->numberPhone = $this->contacts[$name];
        } else {
            \ErrorException::class;
        }
    }

    public function send(string $content, string $name): void
    {
        //
        $this->getContact($name);
        echo 'Viber: ' . $this->numberPhone . '//' . $content . '<br>';
    }
}