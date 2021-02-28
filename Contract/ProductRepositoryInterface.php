<?php


namespace AbstractFactory\Contract;

use AbstractFactory\Entity\Product;

interface ProductRepositoryInterface
{

    /**
     * @param Product $product
     * @return void
     */
    public function add(Product $product);

    /**
     * @param Product $product
     * @return void
     */
    public function delete(Product $product);

    /**
     * @param Product $product
     * @return void
     */
    public function update(Product $product);
}