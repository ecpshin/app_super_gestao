<?php

namespace App\Http\Controllers;

use App\Http\Requests\Supplier\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::paginate(5);
        return view('app.suppliers.index', ['suppliers' => $suppliers]);
    }

    public function search()
    {
        return view('app.suppliers.search');
    }

    public function create()
    {
        return view('app.suppliers.create');
    }

    public function store(SupplierRequest $request)
    {
        $attributes = $request->validated();
        Supplier::create($attributes);
        return redirect()->route('supplier.index');
    }

    public function show(Supplier $supplier)
    {
        return view('app.suppliers.show', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        return view('app.suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $attributes = $request->all();
        $supplier->update($attributes);
        return redirect()->route('supplier.index');
    }


    public function destroy(Supplier $supplier)
    {
        Supplier::find($supplier->id)->delete();
        return redirect()->route('supplier.index');
    }

    public function pesquisar () {
        return view('app.suppliers.searches');
    }

    public function listar (Request $request) {
        $suppliers = Supplier::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->paginate(5);

        return view('app.suppliers.listar', ['suppliers' => $suppliers, 'request' => $request->all()]);
    }
}