<?php

namespace Module\ProductModule\Domain;

use JsonSerializable;

class Product implements JsonSerializable {
    private string $name;
    private string $code;
    private float $price;
    private string $category;

    public function __construct(string $name, string $code, float $price,string $category){
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
    }

    public function jsonSerialize (): array
    {
        return [
            'name' => $this->name,
            'code' => $this->code,
            'price' => $this->price,
            'category' => $this->category
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public static function fromArray(array $data): self
    {
        return new self($data['name'], $data['code'], $data['category'], $data['price']);
    }
}

