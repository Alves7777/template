<?php

namespace App\Http\Controllers\Ecommerce\UserEcommerce;

use App\Http\Controllers\Controller;
use App\Models\Ecommerce\UserEcommerce\UserEcommerce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEcommerceController extends Controller
{

    public function userEcommerce(Request $request)
    {
        $data = [];
// se entrar no if, é porque o usuário clicou no botão logar
        if (request()->isMethod("POST")) {

            $login = $request->input('login');
            $password = $request->input('password');

            /***
             * ATENÇÃO::
             * Verificar a correção da forma que está logando, pois o que está valendo é o
             * CPF e não o e-mail do login..
             **/

            $credential = ['login' => $login, 'password' => $password];

            //logar
            $access = Auth::guard('ecommerce')->attempt($credential);

//            $test = Auth::guard('ecommerce');

            if ($access) {
                return redirect()->route('index');
            } else {
                request()->session()->flash('error', "Usuário / Senha Inválido");
                return redirect()->route('user-ecommerce');
            }
        }

        return view('site.ecommerce.userecommerce', $data);
    }

}
