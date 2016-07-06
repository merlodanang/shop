<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{

    public function show($id)
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('category.index', ['categories' => $categories]);
    }
}
