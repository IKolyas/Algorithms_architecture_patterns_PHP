<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\PostgresSQL;

abstract class BasePostgresRepository
{
    /**
     * @var PostgresSQL
     */
    private PostgresSQL $mySQLConnection;

    /**
     * BaseMySQLRepository constructor.
     * @param PostgresSQL $mySQLConnection
     */
    public function __construct(PostgresSQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    /**
     * @return PostgresSQL
     */
    public function getMySQLConnection(): PostgresSQL
    {
        return $this->mySQLConnection;
    }
}