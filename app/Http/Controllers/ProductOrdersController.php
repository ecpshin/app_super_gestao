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
        $rulesP = [
            'product_id' => 'exists:products,id', 
            'quantidade' => 'required'
        ];

        $messageP = [
            'product_id.exists' => 'O produto informado não existe.',
            'required' => 'O campo :attribute é obrigatório!'
        ];

        $request->validate($rulesP, $messageP);
        
        $produto = (int) $request->get('product_id');
        $order->products()->attach($produto, [
            'quantidade' => $request->get('quantidade')
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
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy(ProductOrder $productOrder, Order $order) 
    {        
        $productOrder->delete();
        return redirect()->route('product_orders.create', ['order' => $order->id]);
    }
}
