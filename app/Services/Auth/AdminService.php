<?php

namespace App\Services\Auth;

use App\Models\AddressAdmin;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminService
{
    public function saveUser(Admin $admin, AddressAdmin $address): array
    {
        // buscando um user o login que deve ser salvo
        $dbAdmin = Admin::where('email', $admin->email)->first();
        if ($dbAdmin) {
            return ['status' => 'error', 'message'=> 'Usuário ja cadastrado no sistema. '];
        }

        try {
            DB::beginTransaction(); // iniciar uma transação
            $admin->save(); //salva o user ;
            $address->admin_id = $admin->id; // relacionamentos das tabelas;
            $address->save();// salvar o endereço.
            DB::commit(); // conformando uma transação.
            return ['status' => 'success', 'message'=> 'Usuário cadastrado com sucesso.'];
        } catch (\Exception $e) {
            Log::error("ERROR", ['file'=>'AdminService.SaveUser','message' => $e->getMessage()]);
            DB::rollBack(); // cancelar transação.
            return ['status' => 'error', 'message'=> 'Não pode cadastrar um usuário. '];
        }

    }

}
