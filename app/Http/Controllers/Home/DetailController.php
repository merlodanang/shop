<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Product;

class DetailController extends Controller
{

    public $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    public function show($slug)
    {
        $product = $this->product->whereSlug($slug)->first();
        return view('details',['product' => $product]);
    }
}
