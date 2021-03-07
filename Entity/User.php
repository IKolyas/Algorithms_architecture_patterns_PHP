<?php


namespace Observers\Entity;


class User
{
    /**
     * @var string
     */
    private $username;
    private $email;
    private $workExperience;

    /**
     * User constructor.
     * @param string $username
     * @param string $email
     * @param string $workExperience
     */
    public function __construct($username, $email, $workExperience)
    {
        $this->username = $username;
        $this->email = $email;
        $this->workExperience = $workExperience;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->username;
    }

}