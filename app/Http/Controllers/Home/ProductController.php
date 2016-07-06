<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Product;
use App\SubCategory;

class ProductController extends Controller
{

    public $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    public function show($slug)
    {
        $subCategory = SubCategory::whereSlug($slug)->first();
        $products = $this->product->where('sub_category_id',$subCategory->id)->paginate(15);
        return view('products',['products' => $products]);
    }
}
