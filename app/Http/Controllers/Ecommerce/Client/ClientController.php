<?php

namespace App\Http\Controllers\Ecommerce\Client;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\Address\Address;
use App\Models\Ecommerce\UserEcommerce\UserEcommerce;
use App\Services\Client\ClientService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{

    public function ecoRegister(Request $request)
    {
        $data = [];
        return view('site.ecommerce.eco_register', $data);
    }

    public function addClient(Request $request): RedirectResponse
    {
//        $values =  $request->input('name', ''); // pegar informação única de input separadamente.
//        $values =  $request->all(); // uma das opções de pegar todas as informações pelo input.
        $values =  request()->all();
        $userEcommerce = new UserEcommerce();
        $userEcommerce->fill($values);
        $userEcommerce->login = request()->input('cpf', '');

        $password = request()->input('password', '');
        $userEcommerce->password = Hash::make($password); //criptografa a senha

        $address = new Address($values);
        $address->logradouro = request()->input('address', ''); // pegando informações manualmente, pq o nome do form ta diferente da table.

        $clientService = new ClientService();
        $result = $clientService->saveUser($userEcommerce, $address);

        $message    = $result['message'];
        $status     = $result['status'];

        request()->session()->flash($status, $message);

        return redirect()->route('eco_register');
    }


}
