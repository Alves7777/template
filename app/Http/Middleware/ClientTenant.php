<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;

class ClientTenant
{
    public function handle(Request $request, Closure $next)
    {
        $slug = $request->route('client_slug');
        if (!$slug) {
            return $next($request);
        }
        $client = Client::where('slug', $slug)->first();
        if (!$client) {
            abort(404, 'Cliente não encontrado');
        }
        // Se não for master, só pode acessar o próprio client
        if (!Auth::user()->is_master && Auth::user()->client_id !== $client->id) {
            abort(403, 'Acesso negado ao cliente');
        }
        // Compartilha o client para o app inteiro
        app()->instance('currentClient', $client);
        return $next($request);
    }
}
