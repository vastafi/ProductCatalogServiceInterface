<?php

class Product{

    private string $name;
    private string $code;
    private float $price;
    private string $category;

    public function _construct(string $name,string $code,float $price, string $category){
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;

    }
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;  
        return $this;           
    }

    public function getCode(): string {
        return $this->code;
    }

     public function setCode(string $code): self {
        $this->code = $code; 
        return $this;            
    }

     public function getPrice(): float {
        return $this->price;
    }

     public function setPrice(float $price): self {
        $this->price = $price;  
        return $this;           
    }

    public function getCategory(): string {
        return $this->category;
    }

    public function setCategory(string $category): self {
        $this->category = $category; 
        return $this;            
    }       
    
}

?>