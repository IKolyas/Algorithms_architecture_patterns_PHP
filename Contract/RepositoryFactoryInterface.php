<?php
namespace AbstractFactory\Contract;

interface RepositoryFactoryInterface
{
    /**
     * @return ProductRepositoryInterface
     */
    public function createProductRepository(): ProductRepositoryInterface;

}