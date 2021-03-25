<?php

namespace Module\ProductModule;
namespace Module\ProductModule\Domain\Product;
namespace Module\ProductModule\Application\ProductCatalgServiceInterface;

use ArrayObject;

/*class ProductRepository implements extends  ProductCatalogServiceInterface {
    public function getProductByCode(string $productCode){
       print_r ("+ The product selected by code is:" $this->fileInformation);
    }*/
   
  
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
?>