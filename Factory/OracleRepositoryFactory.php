<?php


namespace AbstractFactory\Factory;


use AbstractFactory\Contract\ProductRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Db\Oracle;
use AbstractFactory\Repository\OracleProductRepository;

class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function createProductRepository(): ProductRepositoryInterface
    {
        // TODO: Implement createProductRepository() method.
        return new OracleProductRepository($this->oracleConnection);
    }
}