<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\Order;
use Session;
use App\Item;

class OrderController extends Controller
{

    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function order()
    {
        $arr = [];
        $arr['total'] = 0;
        $cart = Session::get('input')?Session::get('input'):[];
        foreach($cart as $key => $value) {
            $product = Product::find($key);
            $arr['products'][$key]['product'] = $product;
            $arr['products'][$key]['quantity'] = $value;
            $arr['total'] += $product->price* $value;
        }
        return view('order',['cart' => $arr]);
    }

    public function store(Request $request)
    {
        $checkout = Session::get('input');
        $order = Order::create($request->all());
        foreach($checkout as $key=>$quantity) {
            $items [] = [
                'order_id'=>$order->id,
                'product_id'=> $key,
                'quantity' => $quantity,
                ];
        }
        Item::insert($items);
        $request->session()->forget('input');
        return view('order');
    }
}
