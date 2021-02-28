<?php


namespace AbstractFactory\Repository;

use AbstractFactory\Contract\ProductRepositoryInterface;
use AbstractFactory\Entity\Product;


/**
 * Class MySQLProductRepository
 * @package AbstractFactory\Repository
 */
class MySQLProductRepository extends BaseMySQLRepository implements ProductRepositoryInterface

{
    /**
     * @param Product $product
     */
    public function add(Product $product)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param Product $product
     */
    public function delete(Product $product)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param Product $product
     */
    public function update(Product $product)
    {
        // TODO: Implement update() method.
    }
}