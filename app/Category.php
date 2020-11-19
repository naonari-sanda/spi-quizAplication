<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function findCategorySelectBoxInAdmin(): array
    {
        $categories = Category::select('id', 'name')->get();

        $categoryArray = [];

        foreach ($categories as $category) {
            $categoryArray[$category->id] = $category->name;
        }
        return $categoryArray;
    }
}
