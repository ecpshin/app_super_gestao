<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class ProductOrdersController extends Controller
{
    public function index()
    {
        $productOrders = ProductOrder::paginate(10);
        return view('app.product_orders.index', [
            'productOrders' => $productOrders
        ]);
    }

    public function create(Order $order)
    {
        $products = Product::all();
        $order->products;
        return view('app.product_orders.create', [
            'order' => $order,
            'products' => $products
        ]);
    }

    public function store(Request $request, Order $order)
    {
        $rulesP = ['product_id' => 'exists:products,id'];
        $messageP = ['product_id.exists' => 'O produto informado não existe.'];
        $request->validate($rulesP, $messageP);
        $produto = (int) $request->get('product_id');

        ProductOrder::create([
            'order_id' => $order->id,
            'product_id' => $produto
        ]);
        return redirect()->route('product_orders.create', ['order' => $order->id]);
    }

    public function show($id)
    {
        //
    }

   public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
