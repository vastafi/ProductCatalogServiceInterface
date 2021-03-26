<?php

namespace Module\ProductModule\Infrastructure\Repository;

use Module\ProductModule\Aplication\ProductCatalogServiceInterface;
use Module\ProductModule\Aplication\ProductCollection;
use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductSearchCriteria;

class ProductRepository implements ProductCatalogServiceInterface {

    public function getProductByCode(string $productCode): Product
    {
        // TODO: Implement getProductByCode() method.
    }

    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection
    {
        // TODO: Implement searchProduct() method.
    }

    public function createProduct(Product $product): bool
    {
        // TODO: Implement createProduct() method.
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

//use ArrayObject;

/*class ProductRepository implements extends  ProductCatalogServiceInterface {
    public function getProductByCode(string $productCode){
       print_r ("+ The product selected by code is:" $this->fileInformation);
    }*/
   
 /*
class ProductRepository implements  ProductCatalogServiceInterface{

    public function getProductByCode(string $productCode){
       print_r ("+ The product selected by code is:". $productCode);
    }

	public function searchProduct(ProductSearchCriteria $criteria):ProductCollection {
        echo "Search for the product by criteria:".$criteria ."/n";
    }

	public function createProduct(Product $product): bool{
        echo "Create product:".$product ."/n";
    }

	public function updateProduct(Product $product): bool{
        echo "Update product:".$product ."/n";
    }

	public function deleteProductByCode(string $productCode): bool{
        echo "Delete product by code:".$productCode ."/n";
    }
}
*/