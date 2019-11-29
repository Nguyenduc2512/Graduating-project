<?php

namespace App\Services;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{
    public function getCategory()
    {
        $categorys = Category::withCount(['products'])->get();
        return $categorys;
    }
    public function listCategoryStatus1()
    {
        $categorys1 = Category::where('status', 1)->withCount(['products'])
            ->get();
        return $categorys1;
    }
    public function listCategoryStatus0()
    {
        $categorys0 = Category::where('status', 0)->withCount(['products'])
            ->get();
        return $categorys0;
    }
    public function addNewCategory(Request $request)
    {
        $category = new Category();
        $data = ['name' => $request->name, 'status' => $request->status, 'description' => $request->description,];
        $category->fill($data);
        $category->save();
    }
    public function editFormCategory($id)
    {
        $category = Category::find($id);
        return $category;
    }
    public function editCategory(Request $request)
    {
        $category = Category::find($request->id);
        $data = ['name' => $request->name, 'status' => $request->status, 'description' => $request->description, ];
        $category->fill($data);

        $category->save();
    }
}

