<?php


namespace AbstractFactory\Repository;


use AbstractFactory\Contract\ProductRepositoryInterface;
use AbstractFactory\Entity\Product;

class OracleProductRepository extends BaseOracleRepository implements ProductRepositoryInterface
{
    public function add(Product $product)
    {
        // TODO: Implement add() method.
    }

    public function delete(Product $product)
    {
        // TODO: Implement delete() method.
    }

    public function update(Product $product)
    {
        // TODO: Implement update() method.
    }
}