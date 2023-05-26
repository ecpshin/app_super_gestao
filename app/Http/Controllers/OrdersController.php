<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrdersStoreRequest;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('app.orders.index', [
            'orders' => $orders
        ]);
    }

    public function create()
    {
        $clients = Client::all();
        return view('app.orders.create', [ 'clients' => $clients]);
    }

    public function store(OrdersStoreRequest $request)
    {
        $attributes = $request->validated();
        Order::create($attributes);
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('app.orders.show');
    }

    public function edit(Order $order)
    {
        $clients = Client::all();
        return view('app.orders.edit', [
            'order' => $order,
            'clients' => $clients
        ]);
    }

    public function update(OrdersStoreRequest $request, Order $order)
    {
        $attributes = $request->validated();
        $order->update($attributes);
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
