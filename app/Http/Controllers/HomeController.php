<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;


class HomeController extends Controller
{
    public $product;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $products = $this->product->orderBy('id','DESC')->take(15)->get();
        return view('home',['products' => $products]);
    }

//    public function data()
//    {
//        $with['category'] = function($query) {
//            $query->select('id', 'name');
//        };
//        $data = Product::with($with)->select('products.id', 'products.title', 'products.about', 'products.price', 'products.img', 'products.category_id')->orderBy('products.id','DESC')->get();
//        $collection = $data->map(function ($data) {
//            $data->cat = $data->category->name;
//            unset($data->category);
//            return $data;
//        });
//        return response()->json($collection);
//    }
}
