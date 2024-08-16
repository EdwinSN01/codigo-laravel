<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('servicios',[
            'category' => $category,
            'servicios' => $category->servicios()->with('category')->latest()->paginate()
        ]);
    }
}
