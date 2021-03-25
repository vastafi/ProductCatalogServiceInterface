<?php

class SearchCriteria
{
    private int $page;
    private int $limit;
    private string $name;
    private string $category;

public function __construct($page = "" , $limit = "", $name = '', $category = '')
    {
        $this->page = $page;
        $this->limit = $limit;
        $this->name = $name;
        $this->category = $category;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

        public function getCategory()
    {
        return $this->category;
    }

        public function setCategory($category)
    {
        $this->category = $category;
    }


}
?>