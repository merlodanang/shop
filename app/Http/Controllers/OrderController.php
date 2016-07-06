<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Order;
use App\Item;
use App\Http\Requests\ProductRequest;

class OrderController extends Controller
{

    public function index()
    {
        $with['items'] = function($query){
            $query->select('id','order_id','product_id','quantity');
        };
        $with['items.product'] = function($query){
            $query->select('id','name');
        };
        $orders = Order::with($with)->orderBy('id', 'desc')->paginate(10);
        return view('order.index', ['orders' => $orders]);
    }
    public function show($id)
    {
        
    }
}
