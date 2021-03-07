<?php


namespace Observers\Entity;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class JobExchange implements splSubject
{
    private $jobs;
    /**
     * @var SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
        $this->downloadJobList();
    }

    public function downloadJobList()
    {
        $this->jobs = [
            'Java' => '.........',
            'JavaScript' => '............',
            'Rubi' => '.............'
        ];
    }

    /**
     * @return array
     */
    public function getJobListPop()
    {

        return $this->jobs;
    }

    /**
     * @param $name
     * @param $description
     */
    public function addJob($name, $description)
    {
        $this->jobs[$name] = $description;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }
}