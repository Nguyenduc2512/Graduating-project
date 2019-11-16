<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Imagick;


class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

    }

    public function listCategory()
    {
        $categorys = $this
            ->categoryService
            ->getCategory();
        $categorys1 = $this
            ->categoryService
            ->listCategoryStatus1();
        $categorys0 = $this
            ->categoryService
            ->listCategoryStatus0();
        return view('admin/category/index', compact('categorys', 'categorys1', 'categorys0'));
    }
    public function newCategory()
    {
        return view('admin/category/add');
    }

    public function addNewCategory(CategoryRequest $request)
    {
        $this
            ->categoryService
            ->addNewCategory($request);
        return redirect()->route('admin.list_category');
    }

    public function editFormCategory( $id)
    {
        $category = $this
            ->categoryService
            ->editFormCategory($id);
        return view('admin/category/edit', compact('category'));
    }
    public function editCategory(CategoryRequest $request)
    {
        $category = $this
            ->categoryService
            ->editCategory($request);
        return redirect()->route('admin.list_category');
    }

}

