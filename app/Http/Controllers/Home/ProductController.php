<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{

    public $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    public function show($id)
    {
        $products = $this->product->where('sub_category_id',$id)->paginate(10);
        return view('products',['products' => $products]);
    }
}
