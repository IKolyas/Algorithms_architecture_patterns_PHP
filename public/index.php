<?php

namespace Adapter;

use Adapter\Services\SendMessage;

require_once '../Services/SendMessage.php';

$message = new SendMessage();
$message->sendViber('Helli, Semen!', 'Semen');
$message->sendEmail('Helli, Semen!', 'Semen');