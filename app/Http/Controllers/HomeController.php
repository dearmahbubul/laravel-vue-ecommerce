<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function checkout()
    {
        $cart = Cart::content();
        if($cart->count() > 0){
            $order_info = json_encode($cart);
            $total_price = Cart::total();

            try {
                $order = Order::create([
                    'order_info' => $order_info,
                    'total_price' => $total_price,
                ]);
                Cart::destroy();
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
            return response([
                'data' => $order->id
            ],Response::HTTP_CREATED);
        }else{
            return redirect()->back()->with('error', 'Your cart is empty');
        }
    }
}
