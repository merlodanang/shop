<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{

    public function storeSession(Request $request)
    {
        $arr = Session::get('input');
        $input = $request->only('quantity', 'id_product');
        if (!isset($arr[$input['id_product']])) {
            $arr[$input['id_product']] = 0;
        }
        $arr[$input['id_product']] += $input['quantity'];
        Session::put('input', $arr);
        return redirect()->route('home.checkout.index');
    }

    public function index()
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
        return view('cart',['cart' => $arr]);
    }
    
    public function deleteCart($id)
    {
       $checkout = Session::get('input');
       unset($checkout[$id]);
       Session::put('input', $checkout);
       return redirect()->route('home.checkout.index');
    }
    
    public function total(array $arr)
    {
        return $arr;
    }
    
}
