<?php


namespace AbstractFactory\Service;


use AbstractFactory\Contract\ProductRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Entity\Product;

class Service
{
    /**
     * @var ProductRepositoryInterface
     */
    private ProductRepositoryInterface $productRepository;

    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->productRepository = $repositoryFactory->createProductRepository();
    }

    public function addProduct(): void
    {
        $product = new Product();
        $this->productRepository->add($product);
    }
}