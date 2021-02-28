<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\MySQL;

abstract class BaseMySQLRepository
{
    /**
     * @var MySQL
     */
    private MySQL $mySQLConnection;

    /**
     * BaseMySQLRepository constructor.
     * @param MySQL $mySQLConnection
     */
    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    /**
     * @return MySQL
     */
    public function getMySQLConnection(): MySQL
    {
        return $this->mySQLConnection;
    }


}