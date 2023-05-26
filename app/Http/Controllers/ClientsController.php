<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clients\ClientStoreRequest;
use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('app.clients.index', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('app.clients.create');
    }

    public function store(ClientStoreRequest $request)
    {
        $attributes = $request->validated();
        $client = Client::create($attributes);
        $client->address()->create($attributes);
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        return view('app.clients.show', [
            'client' => $client
        ]);
    }

    public function edit(Client $client)
    {

        return view('app.clients.edit', [
            'client' => $client
        ]);
    }

    public function update(ClientStoreRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
