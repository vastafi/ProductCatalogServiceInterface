<?php

namespace Module\ProductModule\Domain;

class ProductCollection extends ArrayObject {
    public function __construct($array = array()){
        parent::__construct($array, ArrayObject::ARRAY_AS_PROPS);
    }

}




