<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = \Cart::getContent();
        $data = json_encode($cart);

        return response([
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Darryldecode\Cart\Exceptions\InvalidItemException
     */
    public function store(Request $request)
    {
        $product = Product::where('id',$request->get('id'))->first();
        $cart = \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => (int) $product->price,
            'quantity' => 1
        ]);
        $data = json_encode($cart);
        return response([
            'data' => $data
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::update($request->get('id'), array(
            'quantity' => $request->get('qty'), // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        ));
        $data = json_encode($cart);
        return response([
            'data' => $data
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return response(null,Response::HTTP_OK);

    }
}
