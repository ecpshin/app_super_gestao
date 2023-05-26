<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\ProductStoreRequest;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('app.products.index', [ 'products' => $products]);
    }

    public function create()
    {
        $units = Unit::all();
        $suppliers = Supplier::all();
        return view('app.products.create', compact('units', 'suppliers'));
    }

    public function store(ProductStoreRequest $request)
    {
        $attributes = $request->validated();
        Product::create($attributes);
        return redirect()->route('produtos.index');
    }

    public function show(Product $product)
    {
        echo 'Show';
    }

    public function edit(Product $product)
    {
        $units = Unit::all();
        return view('app.products.edit', compact('product', 'units'));
    }

    public function update(ProductStoreRequest $request, Product $product)
    {
        $attributes = $request->validated();
        $product->update($attributes);
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        echo 'Destroy';
    }

    public function pesquisar () {
        $units = Unit::all();
        return view('app.products.search', ['units' => $units]);
    }

    public function listar (Request $request) {
        $products = Product::where('nome','like','%'.$request->input('nome').'%')
            ->where('descricao','like','%'.$request->input('descricao').'%')
            ->where('peso','like','%'.$request->input('peso').'%')
            ->where('unit_id','like','%'.$request->input('unit_id').'%')
            ->get();
        return view('app.products.searches', [
            'products' => $products
        ]);
    }

}
