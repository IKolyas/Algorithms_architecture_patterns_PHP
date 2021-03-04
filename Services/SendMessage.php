<?php


namespace Adapter\Services;


require_once '../Contract/MessengerInterface.php';
require_once '../Enity/EmailMessage.php';
require_once '../Enity/ViberMessage.php';
require_once '../Adapters/ViberAdapter.php';
require_once '../Adapters/EmailAdapter.php';

use Adapter\Adapters\EmailAdapter;
use Adapter\Adapters\ViberAdapter;
use Adapter\Entity\EmailMessage;
use Adapter\Entity\ViberMessage;

class SendMessage
{
    public function sendViber(string $content, string $name) {
        $viberMessage = new ViberAdapter(new ViberMessage());
        $viberMessage->message($content, $name);
    }

    public function sendEmail(string $content, string $name) {
        $emailMessage = new EmailAdapter(new EmailMessage());
        $emailMessage->message($content, $name);

    }
}