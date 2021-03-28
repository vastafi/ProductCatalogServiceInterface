<?php

namespace Module\ProductModule\Infrastructure\Repository;

use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductCollection;
use Module\ProductModule\Domain\ProductSearchCriteria;
use Module\ProductModule\Exception\ProductCodeDuplicateException;
use Module\ProductModule\Exception\ProductNotFoundException;
use Module\ProductModule\Infrastructure\Contract\ProductCatalogRepositoryInterface;

class ProductRepositoryFilesSystems implements ProductCatalogRepositoryInterface
{
    private string $road;
    private ProductCollection $item;

    public function __construct(string $road)
    {
        $this->road= $road;
        $this->load();
    }

    public function load(){
        $item = [];
        foreach(file($this->road) as $productJson){
            $item[] = Product::fromArray(json_decode($productJson, true));
        }
        $this->item = new ProductCollection(...$item);
    }

    public function save(): bool{
        if(!isset($this->items)){
            return false;
        }
        $content = "";
        foreach($this->items as $product){
            $content .= json_encode($product);
        }
        return file_put_contents($this->road, $content);
    }

    public function getProductByCode(string $productCode): Product
    {
        foreach($this->item as $product){
            if($productCode === $product->code()){
                return $product;
            }
        }
        throw new ProductNotFoundException();
    }

    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection
    {
        return $this
            ->item
            ->filterIf(
                !empty($criteria->getName()),
                fn(Product $product) => strpos($product->getName(), $criteria->getName()) !== 0
            )

            ->filterIf(
                !empty($criteria->getCategory()),
                fn(Product $product) => $product->getCategory() === $criteria->getCategory()
            )
            ->paginate(
                $criteria->getLimit(),
                $criteria->getPage()
            );
    }

    public function createProduct(Product $product): bool
    {
        if($this->item->hasCode($product->getCode())) {
            throw new ProductCodeDuplicateException('Product code exists.');
        }
        $this->item[] = $product;
        return file_put_contents($this->road, json_encode($product), FILE_APPEND);
    }

    public function updateProduct(Product $product): bool
    {
        $this->deleteProductByCode($product->getCode());
        return $this->createProduct($product);
    }

    public function deleteProductByCode(string $productCode): bool
    {
        foreach($this as $index => $product){
            if($product->code() === $product->code()) {
                unset($this[$index]);

            }
        }
        throw new ProductNotFoundException();
    }

    public function __destruct(){
        $this->save();
    }

}
