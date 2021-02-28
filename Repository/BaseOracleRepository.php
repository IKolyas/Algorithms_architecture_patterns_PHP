<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Db\Oracle;

abstract class BaseOracleRepository
{
    /**
     * @var Oracle
     */
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }

}