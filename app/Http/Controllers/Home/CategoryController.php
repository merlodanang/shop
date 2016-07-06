<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function products($slug)
    {
        $with['subCategories'] = function($query){
            $query->select('id','category_id');
        };
        $categories = Category::with($with)->whereSlug($slug)->get()->pluck('subCategories')->toArray();
        $ids = array_pluck($categories[0],'id');
        $products = Product::whereIn('sub_category_id',$ids)->orderBy('created_at','DESC')->paginate(15);
        return view('category', ['products' => $products]);
    }
}
