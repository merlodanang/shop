<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }
    
    public function update(CategoryRequest $request, $id)
    {
        Category::find($id)->update($request->all());
        return redirect()->route('category.index');
    }
    
    public function edit($id)
    {
        
        $category = Category::find($id);
        return view('category.edit',['cat' => $category]);
    }
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        return view('category.index', ['categories' => $categories]);
    }
    
    public function show($id)
    {
        
    }
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
