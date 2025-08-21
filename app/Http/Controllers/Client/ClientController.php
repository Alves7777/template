<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:clients,slug',
            'template' => 'nullable|string|max:255',
        ]);
        $client = Client::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'template' => $request->template,
        ]);
        return redirect()->route('clients.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:clients,slug,' . $client->id,
            'template' => 'nullable|string|max:255',
        ]);
        $client->update([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'template' => $request->template,
        ]);
        return redirect()->route('clients.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Cliente removido com sucesso!');
    }
}
