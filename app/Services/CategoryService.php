<?php

namespace App\Services;
use App\Models\Category;

class CategoryService {

    public function getCategory()
    {
     $categories = Category::all();

     return $categories;
    }
}
