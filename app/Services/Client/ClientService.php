<?php

namespace App\Services\Client;

use App\Models\Ecommerce\Address\Address;
use App\Models\Ecommerce\UserEcommerce\UserEcommerce;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientService
{
    public function saveUser(UserEcommerce $userEcommerce, Address $address): array
    {
        // buscando um user o login que deve ser salvo
        $dbUserEcommerce = UserEcommerce::where('login', $userEcommerce->login)->first();
        if ($dbUserEcommerce) {
            return ['status' => 'error', 'message'=> 'Usuário ja cadastrado no sistema. '];
        }

        try {
            DB::beginTransaction(); // iniciar uma transação
            $userEcommerce->save(); //salva o user ;
            $address->user_ecommerce_id = $userEcommerce->id; // relacionamentos das tabelas;
            $address->save();// salvar o endereço.
            DB::commit(); // conformando uma transação.
            return ['status' => 'success', 'message'=> 'Usuário cadastrado com sucesso.'];
        } catch (\Exception $e) {
            Log::error("ERROR", ['file'=>'ClientService.SaveUser','message' => $e->getMessage()]);
            DB::rollBack(); // cancelar transação.
            return ['status' => 'error', 'message'=> 'Não pode cadastrar um usuário. '];
        }

    }

}
