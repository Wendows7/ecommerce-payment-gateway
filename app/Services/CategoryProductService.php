<?php

namespace App\Services;

use App\Models\ProductCategory;

class CategoryProductService
{

    protected $category;

    public function __construct(ProductCategory $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->all();
    }

}
