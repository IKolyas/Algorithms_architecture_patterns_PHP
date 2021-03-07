<?php


namespace Observers\Observer;


use Observers\Entity\User;
use SplObserver;
use SplSubject;

class JobObserver implements SplObserver
{
    protected $user;


    /**
     * JobObserver constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        $popValue = $subject->getJobListPop();
        echo $this->user->getUserName() . ', для Вас появилась новая вакансия - ' . array_key_last($popValue) . ': ' . array_pop($popValue) . '<br>';
    }
}