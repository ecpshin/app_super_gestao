<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductDetail\ProductDetailsStoreRequest;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function index()
    {
        // $product_details = DB::table('product_details')
        //     ->join('products', 'product_details.product_id', '=', 'products.id')
        //     ->join('units', 'product_details.unit_id', '=', 'units.id')
        //     ->paginate(5);
        $products = Product::with('productDetail')->paginate(5);
        //dd($products);    
        return view('app.product-details.index', ['products' => $products]);
    }

    public function create()
    {
        $units = Unit::all();
        return view('app.product-details.create', compact('units'));
    }
    
    public function store(ProductDetailsStoreRequest $request)
    {
        $attributes = $request->validated();
        ProductDetail::create($attributes);
        return redirect()->route('produtos-detalhe.index');
    }
    
    public function show(ProductDetail $produtos_detalhe)
    {
        return view('app.product-details.show', compact('produtos_detalhe'));
    }
    
    public function edit(ProductDetail $produtos_detalhe)
    {
        $units = Unit::all();
        $produto = Product::with('productDetail')->find($produtos_detalhe->product_id);
        return view('app.product-details.edit', compact('units','produto','produtos_detalhe'));
    }

    public function update(ProductDetailsStoreRequest $request, ProductDetail $produtos_detalhe)
    {
        $attributes = $request->validated();
        $produtos_detalhe->update($attributes);        
        return redirect()->route('produtos-detalhe.index');
    }
    
    public function destroy(ProductDetail $produtos_detalhe)
    {
        $produtos_detalhe->delete();
        return redirect()->route('produtos-detalhe.index');        
    }
}