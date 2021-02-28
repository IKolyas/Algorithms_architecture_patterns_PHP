<?php


namespace AbstractFactory\Factory;


use AbstractFactory\Contract\ProductRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Db\PostgresSQL;
use AbstractFactory\Repository\PostgresProductRepository;

class PostgresRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var PostgresSQL
     */
    private PostgresSQL $mySQLConnection;


    public function __construct(PostgresSQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    /**
     * @return ProductRepositoryInterface
     */

    public function createProductRepository(): ProductRepositoryInterface
    {
        // TODO: Implement createProductRepository() method.
        return new PostgresProductRepository($this->mySQLConnection);
    }
}