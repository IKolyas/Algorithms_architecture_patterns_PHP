<?php

namespace Observers;


use Observers\Entity\JobExchange;
use Observers\Entity\User;
use Observers\Observer\JobObserver;

spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $class = preg_replace('/^Observers/', '', $class);
    $filename = __DIR__ . str_replace('\\', $ds, $class) . '.php';
    require_once $filename;
});


$job = new JobExchange();


$user1 = new User('Pavel', 'pavel22@mail.ru', '5');
$user2 = new User('Nikola', 'Nikola@mail.ru', '12');
$user3 = new User('Vlad', 'Vlad@mail.ru', '8');

$observer1 = new JobObserver($user1);
$observer2 = new JobObserver($user2);
$observer3 = new JobObserver($user3);

$job->attach($observer1);
$job->attach($observer3);

$job->addJob('PHP', 'требуется web разработчик');
$job->notify();

$job->detach($observer3);

$job->addJob('Python', 'требуется Python разработчик');
$job->notify();