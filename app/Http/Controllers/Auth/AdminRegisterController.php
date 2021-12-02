<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AddressAdmin;
use App\Models\Admin;
use App\Services\Auth\AdminService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function adminRegister()
    {
        $data = [];
        return view('auth.admin.admin_register', $data);
    }

    public function addRegister(): RedirectResponse
    {
        $values =  request()->all();
        $userAdmin = new Admin();
        $userAdmin->fill($values);
        $userAdmin->email = request()->input('email', '');

        $password = request()->input('password', '');
        $userAdmin->password = Hash::make($password); //criptografa a senha

        $address = new AddressAdmin($values);
        $address->logradouro = request()->input('address', ''); // pegando informações manualmente, pq o nome do form ta diferente da table.

        $clientService = new AdminService();
        $result = $clientService->saveUser($userAdmin, $address);

        $message    = $result['message'];
        $status     = $result['status'];

        request()->session()->flash($status, $message);

        return redirect()->route('admin_register');
    }

}
