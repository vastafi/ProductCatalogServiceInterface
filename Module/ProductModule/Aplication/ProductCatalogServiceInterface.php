<?php

namespace Module\ProductModule\Aplication;

use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductSearchCriteria;
use Module\ProductModule\Domain\ProductProductCollection;

interface ProductCatalogServiceInterface {

    #CRUD
    public function getProductByCode(string $productCode):Product;
    public function searchProduct(ProductSearchCriteria  $criteria):ProductCollection;
    public function createProduct(Product $product):bool;
    public function updateProduct(Product $product):bool;
    public function deleteProductByCode(string $productCode):bool;

}
	 