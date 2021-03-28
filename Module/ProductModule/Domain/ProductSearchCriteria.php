<?php

namespace Module\ProductModule\Domain;

use Module\ProductModule\Exception\SearchCriteriaInvalidLimitException;
use Module\ProductModule\Exception\SearchCriteriaInvalidPageNumberException;


class ProductSearchCriteria
{
    private string $name;
    private string $category;
    private int $page;
    private int $limit;

    public function __construct($name = '', $category = '' ,$page = 1, $limit = 8 )
    {
        if($page <= 0){
            throw new SearchCriteriaInvalidPageNumberException();
        }
        if($limit <= 0){
            throw new SearchCriteriaInvalidLimitException();
        }

        $this->name = $name;
        $this->category = $category;
        $this->page = $page;
        $this->limit = $limit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

}
