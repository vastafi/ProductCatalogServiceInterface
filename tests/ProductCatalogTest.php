<?php


use Module\ProductModule\Domain\Product;
use Module\ProductModule\Infrastructure\Repository\ProductRepository;

require_once 'C:\Users\vastafi\Documents\GitHub\Interface\vendor\autoload.php';

$product1 = new Product("Test","222",45.5,"test");
print_r($product1);

$product1 = new ProductRepository();
$product1 ->getProductByCode($product1->getCode());
$product1 ->searchProduct();
$product1 ->createProduct($product1);
$product1 ->deleteProductByCode($product1->getCode());
