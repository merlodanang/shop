<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\SubCategory;

class SubCategoryController extends Controller
{

    public function create()
    {
        return view('sub_category.create');
    }

    public function store(CategoryRequest $request)
    {
        SubCategory::create($request->all());
        return redirect()->route('sub_category.index');
    }

    public function index()
    {
        $subCategories = SubCategory::orderBy('id', 'desc')->paginate(10);
        return view('sub_category.index', ['subCategories' => $subCategories]);
    }
}
