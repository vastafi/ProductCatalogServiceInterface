<?php

namespace Module\ProductModule\Infrastructure\ProductRepository;

use Module\ProductModule\Aplication\ProductCatalogServiceInterface;
use Module\ProductModule\Aplication\ProductCollection;
use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductSearchCriteria;
use Module\ProductModule\Infrastructure\Repository\ProductRepository;

class ProductCatalogService implements ProductCatalogServiceInterface
{
    public function __construct(ProductRepository $repository)
    {

    }
    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection
    {
        // TODO: Implement searchProduct() method.
    }

    public function createProduct(Product $product): bool
    {
        // TODO: Implement createProduct() method.
    }
    public function getProductByCode(string $productCode): Product
    {
        // TODO: Implement getProductByCode() method.
    }
    public function updateProduct(Product $product): bool
    {
        // TODO: Implement updateProduct() method.
    }
    public function deleteProductByCode(string $productCode): bool
    {
        // TODO: Implement deleteProductByCode() method.
    }
}

