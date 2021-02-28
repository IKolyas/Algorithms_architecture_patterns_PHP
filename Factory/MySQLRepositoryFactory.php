<?php


namespace AbstractFactory\Factory;

use AbstractFactory\Contract\ProductRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Db\MySQL;
use AbstractFactory\Repository\MySQLProductRepository;

class MySQLRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var MySQL
     */
    private MySQL $mySQLConnection;


    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    /**
     * @return ProductRepositoryInterface
     */

    public function createProductRepository(): ProductRepositoryInterface
    {
        // TODO: Implement createProductRepository() method.
        return new MySQLProductRepository($this->mySQLConnection);
    }
}