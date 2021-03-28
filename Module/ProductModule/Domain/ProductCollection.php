<?php

namespace Module\ProductModule\Domain;

use ArrayObject;
use Module\ProductModule\Exception\ProductNotFoundException;

class ProductCollection extends ArrayObject {

    public function __construct(Product ...$products)
    {
        parent::__construct($products);
    }

    public function filter(callable $callback):ProductCollection
    {
        return new ProductCollection(
            ...array_filter($$this->getArrayCopy(), $callback)
        );
    }

    public function filterIf(bool $flag, callable $callback):ProductCollection{
        if ($flag){
            return $this->filter($callback);
        }
        return $this;
    }

    public function paginate(int $page,int $limit):ProductCollection
    {
        $offset = ($page -1)* $limit;
        return new ProductCollection(
            ...array_slice($this->getArrayCopy(), $offset, $limit)
        );
    }

    public function hasCode(string $productCode): bool{
        foreach($this as $product){
            if($productCode === $product->code()){
                return true;
            }
        }
        return false;
    }

}




