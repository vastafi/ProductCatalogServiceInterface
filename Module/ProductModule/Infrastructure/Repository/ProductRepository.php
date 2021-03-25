<?php

namespace Module\ProductModule;
require_once ('Domain/Product.php');
require_once ('Application/ProductCatalogServiceInterface.php');
use ArrayObject;
/*
require_once ('Domain/Product.php');
require_once ('Application/ProductCatalogServiceInterface.php');
use ArrayObject;

class ProductRepository implements extends  ProductCatalogServiceInterface {
    public function getProductByCode(string $productCode){
       print_r ("+ The product selected by code is:" $this->fileInformation);
    }


  */  
  namespace Module\ProcuctModule;

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