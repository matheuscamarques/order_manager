<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function store(ClientRequest $request)
    {
        $validated = $request->validate([
            'razao_social' => 'required|string|max:255',
            'cnpj' => 'required|string|max:18|unique:clientes',
            'email' => 'required|string|email|max:255|unique:clientes',
        ]);

        Log::alert($validated);

        $cliente = Cliente::create([
            'id' => (string) Str::uuid(),
            'razao_social' => $request->razao_social,
            'cnpj' => $request->cnpj,
            'email' => $request->email,
        ]);

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(ClientRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'razao_social' => 'sometimes|required|string|max:255',
            'cnpj' => 'sometimes|required|string|max:18|unique:clientes,cnpj,' . $cliente->id,
            'email' => 'sometimes|required|string|email|max:255|unique:clientes,email,' . $cliente->id,
        ]);

        $cliente->update($request->all());

        return response()->json($cliente, 200);
    }

    public function destroy($id)
    {
        Cliente::destroy($id);

        return response()->json(null, 204);
    }
}
