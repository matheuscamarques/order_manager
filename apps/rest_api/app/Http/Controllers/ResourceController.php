<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

abstract class ResourceController extends Controller
{
    protected $module_name = '';

    public function index()
    {
        $response = Http::get($this->route());
        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['error' => "Erro ao acessar o serviço de gerenciamento de {$this->module_name}"], $response->status());
        }
    }

    protected function store(Request $request)
    {
        // Exemplo de requisição POST para criar um novo cliente no serviço de gerenciamento
        $response = Http::post($this->route(), $request->all());

        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['error' => "Erro ao criar {$this->module_name}"], $response->status());
        }
    }

    protected function show($id)
    {
        // Exemplo de requisição GET para obter um cliente específico pelo ID
        $response = Http::get($this->route() . $id);

        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['error' => "{$this->module_name} não encontrado"], $response->status());
        }
    }

    protected function update(Request $request, $id)
    {
        // Exemplo de requisição PUT/PATCH para atualizar um cliente no serviço de gerenciamento
        $response = Http::put($this->route() . $id, $request->all());

        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['error' => "Erro ao atualizar {$this->module_name}"], $response->status());
        }
    }

    protected function destroy($id)
    {
        // Exemplo de requisição DELETE para excluir um cliente no serviço de gerenciamento
        $response = Http::delete($this->route() . $id);

        if ($response->successful()) {
            return response()->json(['message' => "{$this->module_name} excluído com sucesso"]);
        } else {
            return response()->json(['error' => "Erro ao excluir {$this->module_name}"], $response->status());
        }
    }
}
