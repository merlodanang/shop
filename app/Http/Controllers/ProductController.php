<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\SubCategory;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function create()
    {
        $category = SubCategory::lists('name','id');
        return view('product.create',['cate' => $category]);
    }

    public function store(ProductRequest $request)
    {
        $request->merge([
            'slug' => str_slug($request->get('name'))
        ]);
        $data = $request->all();
        
        $destinationPath = '/img'; // upload path
        $nameImg =\Carbon\Carbon::now()->timestamp.'_'.$request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path().$destinationPath,$nameImg);
        $data['img'] = 'img/'.$nameImg;
        Product::create($data);
        return redirect()->route('admin.product.index');
    }

    public function index()
    {
        
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('product.index', ['products' => $products]);
    }
}
